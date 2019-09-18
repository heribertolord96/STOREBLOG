<?php

namespace App\Blogmodels;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'file','inicio_vigencia','slug','fin_vigencia'
    ];
}
