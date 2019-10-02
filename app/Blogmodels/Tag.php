<?php

namespace App\Blogmodels;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'nombre', 'slug'
    ];

    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }
    public function eventos()
    {
        return $this->belongsToMany(Evento::class);
    }
}
