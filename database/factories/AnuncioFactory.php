<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Blogmodels\Anuncio::class, function (Faker $faker) {
    
    $title = $faker->sentence(4);

    return [
        
        'nombre' => $title,
        'slug' 			=> str_slug($title),
        'descripcion' 		=> $faker->text(200),
        'inicio_vigencia' 			=> $faker->dateTime(),
        'fin_vigencia' 		=> $faker->dateTime(),
        'file' 			=> $faker->imageUrl($width = 1200, $height = 400),
    ];
});
