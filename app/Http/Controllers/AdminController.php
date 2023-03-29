<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Parametros;
use App\Models\Usuario;
use App\Models\Params;
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
            $teste = $parametros["titulo_home"];
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
                    return view($view,['parametros' => $parametros]);
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
    
}
