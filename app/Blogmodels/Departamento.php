<?php

namespace App\Blogmodels;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = [
        'nombre','codigo', 'slug','descripcion', 'file'
    ];

    public function producto()
    {
        return $this->hasMany(Producto::class);
    }
}
