<?php

namespace App\Blogmodels;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'slug','fecha_inicio',
        'fecha_fin','hora_inicio','hora_fin','file','tienda_id'
    ];
}
