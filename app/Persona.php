<?php

namespace nuyavi;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $fillable=[
        'nombres',
        'apellidopaterno',
        'apellidomaterno',
        'telefono',
        'colonia',
        'codigopostal',
        'pais',
        'estado',
        'ciudad',
        'municipio',
        'numero',
        'calle'
    ];
    
}
