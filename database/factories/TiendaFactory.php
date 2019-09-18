<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Blogmodels\Tienda::class, function (Faker $faker) {

	$title = $faker->sentence(4);

    return [
        'nombre' => $title,
        'slug' 			=> $title,
        'descripcion' => $faker->text(50),
        'hora_apertura' => $faker->time(),
        'hora_cierre' => $faker->time(),
        'num_telefono' => $faker->phoneNumber (),
        'email' => $faker->email(),
        //'ubicacion_id' => rand(1,50),
        'file' => 'http://storeblog.test/images/atrr.png',

    ];
});
