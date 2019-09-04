<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Blogmodels\Tienda::class, function (Faker $faker) {

	$title = $faker->sentence(4);

    return [
        'nombre' => $faker->name,
        //'slug' => str_slug($title),
        'descripcion' => $faker->text(500),
        //'hora_apertura' => $faker->time(),
        'file' => 'http://storeblog.test/images/atrr.png',

    ];
});
