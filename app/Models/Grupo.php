<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public $timestamps = false;
    protected $table = 'gru_grupo';
    protected $primaryKey = 'gru_id_gru';
    
    use HasFactory;
}
