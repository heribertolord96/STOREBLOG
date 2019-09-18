<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Blogmodels\Producto::class, function (Faker $faker) {
    
    $title = $faker->sentence(4);

    return [
        'categoria_id' 		=> rand(1,50),
        'departamento_id' 	=> rand(1,50),
        'tienda_id' 	=> rand(1,50),
        'nombre' 			=> $title,
        'slug' 			=> str_slug($title),
        'descripcion' 		=> $faker->text(100),
        'presentacion' 			=> $faker->word,
        'file' 			=> $faker->imageUrl($width = 1200, $height = 400),
        'precio'        => rand(0.25,3000),
    ];
});
