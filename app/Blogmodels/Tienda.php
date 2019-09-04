<?php

namespace App\Blogmodels;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'hora_apertura',
        'hora_cierre','num_telefono','email','file','ubicacion_id'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
