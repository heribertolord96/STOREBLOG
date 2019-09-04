<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\BlogModels\Tag;

$factory->define(App\Blogmodels\Tag::class, function (Faker $faker) {

	$title = $faker->name;
    return [
        'nombre' => $title,
        //'slug' => slug($title)
        'slug' => $title
    ];
});
