<?php

namespace App\Blogmodels;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'file','inicio_vigencia','slug','fin_vigencia'
    ];
    public function tienda()
    {
        return $this->belongsTo(Tienda::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}

class AnuncioTag extends Model
{
    public function anuncios()
    {
        return $this->belongsToMany(Anuncio::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    protected $fillable = [
        'anuncio_id', 'tag_id'
    ];
   
}
