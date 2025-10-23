<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $table = 'planos';
    protected $fillable = [
        'direccion',
        'modulo',
        'zona_id',
        'numero_plano',
        'pdf_id',
        'proyecto_id'
    ];
}
