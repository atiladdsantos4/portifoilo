<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    public $timestamps = false;
    protected $table = 'arq_arquivo';
    protected $primaryKey = 'arq_id_arq';
    protected $fillable = [
        'arq_nom_arquivo',
        'arq_num_tamanho',
        'arq_nom_tipo',
        'arq_b64_arquivo',
        'arq_id_cdo',
        'arq_id_tar',
        // 'arq_id_res',
        'arq_id_col',
        // 'arq_id_pgi',
        // 'arq_id_tha',
        // 'arq_id_evo'
    ];
    use HasFactory;

    // public function comprovante(){
    //     return $this->belongsTo(PagamentoItem::class,'arq_id_pgi','pgi_id_pgi');
    // }

    public function imagem(){
        return $this->belongsTo(Conteudo::class,'cdo_id_cdo','arq_id_cdo');
    }
}
