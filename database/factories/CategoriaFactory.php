<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Blogmodels\Categoria::class, function (Faker $faker) {

	$title = $faker->sentence(3);

    return [
        'nombre' => $title,
        'slug'=> str_slug($title),
        'codigo' => $faker->postcode(),
        'descripcion' => $faker->text(50),
        'file' => 'http://storeblog.test/images/atrr.png',

    ];
});
