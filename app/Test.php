<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
      protected $fillable = [

     	'titulo',
        'coordenadas',
        'audioPrueba',
        'date',
        'contact',
        'urlImage'
    ];

}
