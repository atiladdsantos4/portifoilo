<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelaMenu extends Model
{
    public $timestamps = false;
    protected $table = 'int_interface';
    protected $primaryKey = 'int_id_int';
    protected $fillable = ['int_nome','int_rota_menu','int_path'];

    use HasFactory;
    
}
