<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Params extends Model
{
    public $timestamps = false;
    protected $table = 'par_parametro';
    protected $primaryKey = 'par_id_par';
    protected $fillable = ['par_descricao','par_valor'];
    use HasFactory;

    public static function getTituloSite(){
       $dados = self::where('par_descricao','=','TITULO_SITE')->first();
       return $dados->par_valor; 
    }

    public static function getNomeRodape(){
        $dados = self::where('par_descricao','=','NOME_RODAPE')->first();
        return $dados->par_valor; 
    }

    public static function getEmailSite(){
        $dados = self::where('par_descricao','=','EMAIL_SITE')->first();
        return $dados->par_valor; 
    }

    public static function getWhatsapp(){
        $dados = self::where('par_descricao','=','NUM_WHATSAPP')->first();
        return $dados->par_valor; 
    }

    public static function getOpcaoMenu($num){
        $dados = self::where('par_descricao','=',$num.'-OPCAO_MENU')->first();
        return $dados->par_valor; 
    }

    public static function getRua(){
        $dados = self::where('par_descricao','=','END_RUA')->first();
        return $dados->par_valor; 
    }

    public static function getCidadeEstado(){
        $dados = self::where('par_descricao','=','END_CIDADE_ESTADO')->first();
        return $dados->par_valor; 
    }

    public static function getCep(){
        $dados = self::where('par_descricao','=','END_CEP')->first();
        return $dados->par_valor; 
    }

    public static function getBairro(){
        $dados = self::where('par_descricao','=','END_BAIRRO')->first();
        return $dados->par_valor; 
    }
}


