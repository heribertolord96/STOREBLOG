<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Blogmodels\PromocionTag::class, function (Faker $faker) {
    
    $title = $faker->sentence(4);

    return [
        
        'promocion_id' 	=> rand(1,50),
        'tag_id' 	=> rand(1,50),
        
    ];
});
