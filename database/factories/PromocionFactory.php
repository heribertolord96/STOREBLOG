<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Blogmodels\Promocion::class, function (Faker $faker) {

	$title = $faker->sentence(3);

    return [
        'nombre' => $title,
        'slug' 			=> str_slug($title),
        'descripcion' => $faker->text(50),
        'fecha_inicio' => $faker->dateTime(), 
        'fecha_fin' => $faker->dateTime(),
        'tienda_id' => rand(1,50),
        //'hora_apertura' => $faker->time(),
        'file' => 'http://storeblog.test/images/atrr.png',

    ];
});
