<?php

namespace App\Blogmodels;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'presentacion','slug',
        'precio','categoria_id','departamento_id','file','tienda_id'
    ];
}
