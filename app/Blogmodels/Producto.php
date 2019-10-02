<?php

namespace App\Blogmodels;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'presentacion','slug',
        'precio','categoria_id','departamento_id','file','tienda_id'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
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

class ProductoTag extends Model
{
    protected $fillable = [
        'producto_id', 'tag_id'
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
