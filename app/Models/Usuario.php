<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $table = 'usu_usuario';
    protected $primaryKey = 'usu_id_usu';
    use HasFactory;

    public function grupos()
    {
        return $this->hasOne(Grupo::class, 'gru_id_gru', 'usu_id_gru');
    }
}
