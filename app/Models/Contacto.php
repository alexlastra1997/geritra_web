<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contacto';

    protected $fillable = [
        'nombre_empresa',
        'numero_identificacion',
        'telefono',
        'correo',
        'nombre_persona',
        'fecha',
    ];
}
