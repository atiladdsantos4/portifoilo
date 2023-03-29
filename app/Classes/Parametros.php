<?php
namespace App\Classes;

class Parametros {
   
    const TITULO_INDEX = 'Clínica de Reabilitação Crisálida';
    const TITULO_SOBRE = 'Sobre Nós';
    const TITULO_SERVICOS = 'Serviços';
    const TITULO_PORTOFOLIO = 'Portfólio';
    const TITULO_TIME = 'Time';
    const TITULO_CONTATO = 'Contato';
    const ENDERECO = 'Rua Aquino S/N, Bairro: Parque Real Serra Verde– na cidade de CAMAÇARI–BA'.PHP_EOL.'CEP: 42800.000';

    public static function get_tempo_contrato(){
     $tempo = [
        1 => "1",
        2 => "2",
        3 => "3",
        4 => "4",
        5 => "5",
        6 => "6",
        7 => "7",
        8 => "8",
        9 => "9",
        10 => "10",
        11 => "11",
        12 => "12",
        13 => "13",
        14 => "14",
        15 => "15",
        16 => "16",
        17 => "17",
        18 => "18",
        19 => "19",
        20 => "20",
        21 => "21",
        22 => "22",
        23 => "23",
        24 => "24",
        25 => "25",
        26 => "26",
        27 => "27",
        28 => "28",
        29 => "29",
        30 => "30"
     ];

     return $tempo;
   }

   public static function get_descricao_anexo(){
    //Variáveis para definir nomes ds anexos//
    $descricao_anexo = [
        "Rg Foto Frente",
        "Rg Foto Verso",
        "Rg Foto Frente/Verso",
        "Foto Perfil Acolhido", 
        "Foto Endereço",
        "Foto Cartão SUS Frente",
        "Foto Cartão SUS Fundo",
        "Foto Cartão SUS Frente/Verso",
        "Foto Cartão Vacina Frente",
        "Foto Cartão Vacina Fundo",
        "Foto Cartão Vacina Frente/Verso",
        "Foto Cartão Plano Saúde Frente",
        "Foto Cartão Plano Saúde Fundo",
        "Foto Cartão Plano Saúde Frente/Verso"
    ];
        return $descricao_anexo;
   }

   public static function formata_real( $pre ){
      $teste = $pre;
      $preco = explode(",",$pre);
      if( strpos($pre,",") == false ){
         $preco_final = str_replace(".", ",",$pre);
         return $preco_final;   
      } 
      $preco_final = str_replace(".", ",",$preco[0]).'.'.$preco[1];
      $preco_final = str_replace(",", "",$preco_final);
      return $preco_final;
   } 

   public static function get_estado_civil(){
      //Variáveis para definir nomes ds anexos//
          $descricao_anexo = [
              "Rg Foto Frente",
              "Rg Foto Verso",
              "Rg Foto Frente/Verso",
              "Foto Perfil Acolhido", 
              "Foto Endereço",
              "Foto Cartão SUS Frente",
              "Foto Cartão SUS Fundo",
              "Foto Cartão SUS Frente/Verso",
              "Foto Cartão Vacina Frente",
              "Foto Cartão Vacina Fundo",
              "Foto Cartão Vacina Frente/Verso",
              "Foto Cartão Plano Saúde Frente",
              "Foto Cartão Plano Saúde Fundo",
              "Foto Cartão Plano Saúde Frente/Verso"
          ];
   }

   //Especialidades que podem efetuar evolução// 
   public static function evolucao_colaboradoes(){
      $varray = [1,2,3,8,9,12,20];
      return implode(",",$varray);
   }

   //Dias da Semana
   public static function dia_semana($id){
      $dia = null;
      switch ($id) {
         case 1:
             $dia = "Segunda";
             break;
         case 2:
             $dia = "Terça";
             break;
         case 3:
             $dia = "Quarta";
             break;
         case 4:
             $dia = "Quinta";
             break;
         case 5:
             $dia = "Sexta";
             break;
         case 6:
             $dia = "Sábado";
             break;
         case 7:
             $dia = "Domingo";
             break;
           
    }
      return $dia;
   }

}