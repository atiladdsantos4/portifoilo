<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    public $timestamps = false;
    protected $table = 'cdo_conteudo';
    protected $primaryKey = 'cdo_id_cdo';
    protected $fillable = ['cdo_id_conteudo','cdo_conteudo','cdo_flag_arquivo','cdo_id_int','cdo_id_tpc','cdo_id_arq'];

    use HasFactory;

    public function tipoconteudo()
    {
        return $this->hasOne(TipoConteudo::class, 'tpc_id_tpc', 'cdo_id_tpc');
    }

    public function interface()
    {
        return $this->hasOne(TelaMenu::class, 'int_id_int', 'cdo_id_int');
    }

    //Chave pertence a outra tabela// usar "with" na eloquent// 
    public function arquivo()
    {
       return $this->belongsTo(Arquivo::class, 'cdo_id_cdo', 'arq_id_cdo');
    }
   
}
