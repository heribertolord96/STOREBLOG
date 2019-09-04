<?php

namespace App\Blogmodels;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'nombre', 'slug'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
