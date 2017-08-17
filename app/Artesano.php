<?php

namespace nuyavi;

use Illuminate\Database\Eloquent\Model;

class Artesano extends Model
{
    //
    protected $fillable=[
        'nombres',
        'apellidopaterno',
        'apellidomaterno',
        'telefono',
        'ciudad',
        'municipio',
        'numero',
        'calle'
    ];
}
