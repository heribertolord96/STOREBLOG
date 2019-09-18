<?php

namespace App\Blogmodels;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre','codigo', 'descripcion','slug', 'file'
    ];

    public function producto()
    {
        return $this->hasMany(Producto::class);
    }
}
