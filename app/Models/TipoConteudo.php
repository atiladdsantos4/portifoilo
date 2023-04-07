<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoConteudo extends Model
{
    public $timestamps = false;
    protected $table = 'tpc_tipo_conteudo';
    protected $primaryKey = 'tpc_id_tpc';
    protected $fillable = ['tpc_desc_tpc'];

    use HasFactory;
}
