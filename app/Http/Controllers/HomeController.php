<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Parametros;
use Mail;

class HomeController extends Controller
{
    public function home(Request $request){
        //session_start();
        //session()->forget('admin');
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
            return view('home.index',['parametros' => $parametros]); 
        } else {
            $view = 'home.'.$request->interface;
            return view($view,['parametros' => $parametros]);
        }
        
       // return view('acolhido.create',['planosaude' => $planosaude,'anexos'=>$anexos, 'menu' => $results,'responsavel'=> $responsavel]);  
    }

    public function envia_email(Request $request){
        $view = 'layouts.email'; 
        $assunto = $request->get('assunto');
        $email = $request->get('email');
        $nome = $request->get('nome');
        $mensagem = $request->get('mensagem');
        $data = array(
                       'nome'=>$request->get('nome'),
                       'assunto'=>$request->get('assunto'),
                       'email'=>$request->get('email'),
                       'mensagem'=>$request->get('mensagem'),
                     );
        try{            
            Mail::send($view, $data, function($message) use ($data) {
              $message->to('atiladdsantos4@gmail.com', 'Atila Santos')
              ->subject($data["assunto"]);
              //$message->attach('C:\Users\Juarez\Downloads\pdf_file.pdf');
              $message->from($data["email"],$data["nome"]);
            });
            if ($request->isMethod('post')) {

                $output = array(
                  'valid' => true,
                  'mensagem' => 'email enviado',
                );
                return response()->json($output);
            }    
            if ($request->isMethod('get')) {
                echo "Basic Email Sent. Check your inbox.";
            }  
        } 
        catch (Exception $e) {
          if ($request->isMethod('post')) {

            $output = array(
              'valid' => false,
              'mensagem' => 'Problemas no envio de email',
            );
            return response()->json($output);
          }    
          if ($request->isMethod('get')) {
              echo "Erro no envio";
          }
        }  
    }
}
