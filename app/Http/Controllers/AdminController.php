<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Parametros;
use App\Models\Usuario;
use App\Models\Params;
use App\Models\TelaMenu;
use App\Models\TipoConteudo;
use App\Models\Conteudo;
use App\Models\Arquivo;
use Illuminate\Support\Facades\DB;
use Mail;

class AdminController extends Controller
{
        public function home(Request $request){
            $teste = $request->interface;
            $parametros = [
                "titulo_home" => Parametros::TITULO_INDEX,   
                "titulo_about" => Parametros::TITULO_SOBRE,   
                "titulo_service" => Parametros::TITULO_SERVICOS,   
                "titulo_portfolio" => Parametros::TITULO_PORTOFOLIO,   
                "titulo_team" => Parametros::TITULO_TIME,   
                "titulo_blog" => Parametros::TITULO_CONTATO,   
                "endereco" => Parametros::ENDERECO,   
            ];
            if( $request->interface == null ){
                return view('admin.index',['parametros' => $parametros]); 
            } else {
                $view = 'admin.'.$request->interface;
                switch ($request->interface) {
                  case 'geral':
                    session_start();
                    $dados = Params::orderBy('par_contexto')->get();
                    return view($view,['dados' => $dados]);
                    break;
                  default:
                    session_start();
                    $TipoConteudo = TipoConteudo::orderBy('tpc_desc_tpc')->get();
                    $TelaMenu = TelaMenu::select('int_id_int','int_nome')->orderBy('int_nome')->get();
                    $conteudo = Conteudo::with('arquivo')->where('cdo_id_int','=',1)->orderBy('cdo_id_cdo')->get();  
                    //dd($conteudo);
                    $vetor = [];
                    $vetorid = [];
                    for( $i = 0; $i < count($conteudo); $i++){
                      if( $conteudo[$i]->cdo_flag_arquivo == 'S' ){
                          $vetor[$conteudo[$i]->cdo_id_conteudo] = $conteudo[$i]->arquivo->arq_b64_arquivo;
                          $vetorid[$conteudo[$i]->cdo_id_conteudo] = $conteudo[$i]->cdo_id_conteudo; 
                      } else {
                          $vetor[$conteudo[$i]->cdo_id_conteudo] = $conteudo[$i]->cdo_conteudo; 
                          $vetorid[$conteudo[$i]->cdo_id_conteudo] = $conteudo[$i]->cdo_id_conteudo; 
                      }
                    }
                    return view($view,['conteudo' => $conteudo, 'dados' => $vetor,'dadosid' => $vetorid]);
                }
               
            }
           // return view('acolhido.create',['planosaude' => $planosaude,'anexos'=>$anexos, 'menu' => $results,'responsavel'=> $responsavel]);  
        }

        public function autentica(Request $request){
           $todos = $request->all(); 
           $email = $request->email;
           $senha = md5($request->senha);
           $dados = Usuario::where('usu_email_usu', '=', $email)->where('usu_senha_usu', '=', $senha)->first();
           if($dados != null){
              session_start();
              session(['user_dados' => $dados ]);
              session(['usuario' => $dados->usu_nome_usu ]);
              session(['grupo' => $dados->grupos->gru_nome_gru ]); 
              session(['admin' => true ]);
              $output = array(
                'valid' => true,
                'mensagem' => 'Acesse Opção de Admin para Administrar o seu Site',
              );
           } else {
              $output = array(
                'valid' => false,
                'mensagem' => 'Login inválido',
              );
           } 
           return response()->json($output);
        }

        public function sair(Request $request){
          session_start();
          session()->forget('admin');
          return redirect()->route('home.geral');
        }  

        public function modifica_param(Request $request,$id){
          DB::beginTransaction();
          Params::where("par_id_par",'=',$id)->update(
          [
              "par_valor" => $request->valor,
          ]
          );
          DB::commit();
          $output = array(
            'valid' => true,
            'mensagem' => 'Parâmetro Alterado com Sucesso',
          );
          return response()->json($output);
        }

        public function modifica_interface(Request $request,$id){
          //$id = $request->get('id');
          $todos = $request->all();
          DB::beginTransaction();
          Conteudo::where("cdo_id_cdo",'=',$id)->update(
          [
              "cdo_conteudo" => $request->get('conteudo'),
          ]
          );
          DB::commit();
          $output = array(
            'valid' => true,
            'mensagem' => 'Conteúdo Alterado com Sucesso',
          );
          return response()->json($output);
        }

        public function modifica_imagem(Request $request){
          $todos = $request->all();
          $arquivos = $request->file('arquivo');
          $id = $request->get('id');
          //teste
          // for($i = 0;$i < count( $arquivos["size"] );$i++ ){
          //     $tam = $_FILES["arquivo"]["size"][$i];
          //     $tipo =$_FILES["arquivo"]["type"][$i];
          //     $tmp = $_FILES["arquivo"]["tmp_name"][$i];
          // }
          //teste
          //$anexos = $request->get('arq_evolucao');
          DB::beginTransaction();
          $conteudo = Conteudo::where('cdo_id_conteudo','=',$id)->first(); 
          $existe = Arquivo::where('arq_id_cdo','=',$id)->exists(); 
          if( $existe ){
            $arquivo = Arquivo::where("arq_id_cdo",'=',$conteudo->cdo_id_cdo)->update([
              "arq_nom_arquivo" => 'Imagem',
              "arq_num_tamanho" => $arquivos->getSize(),
              "arq_nom_tipo" => $arquivos->getMimeType(),
              $base64 = 'data:'. $arquivos->getMimeType().';base64,'.base64_encode(file_get_contents($arquivos->getRealPath())),
              "arq_b64_arquivo" => $base64,
              "arq_data_cadastro" => date('Y-m-d'),
              "arq_id_cdo" => $conteudo->cdo_id_cdo,
              //"arq_id_tar" => $arq_id_tar
          ]);
          } else {
              $arquivo  = Arquivo::create([
                  "arq_nom_arquivo" => 'Imagem',
                  "arq_num_tamanho" => $arquivos->getSize(),
                  "arq_nom_tipo" => $arquivos->getMimeType(),
                  $base64 = 'data:'. $arquivos->getMimeType().';base64,'.base64_encode(file_get_contents($arquivos->getRealPath())),
                  "arq_b64_arquivo" => $base64,
                  "arq_data_cadastro" => date('Y-m-d'),
                  "arq_id_cdo" => $conteudo->cdo_id_cdo,
                  //"arq_id_tar" => $arq_id_tar
              ]); 
          }
           
          DB::commit();
        }  


    
}
