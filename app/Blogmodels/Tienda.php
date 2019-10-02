<?php

namespace App\Blogmodels;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $fillable = [
        'nombre','slug', 'descripcion', 'hora_apertura',
        'hora_cierre','num_telefono','email','file','ubicacion_id'
    ];

    public function producto()
    {
        return $this->hasMany(Producto::class);
    }
    public function evento()
    {
        return $this->hasMany(Evento::class);
    }
    public function promo()
    {
        return $this->hasMany(Promo::class);
    }
    public function anuncio()
    {
        return $this->hasMany(Anuncio::class);
    }
    
}
