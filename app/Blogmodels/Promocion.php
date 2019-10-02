<?php

namespace App\Blogmodels;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'slug','fecha_inicio',
        'fecha_fin','hora_inicio','hora_fin','file','tienda_id'
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

class PromocionTag extends Model
{
    protected $fillable = [
        'promocion_id','tag_id'
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
