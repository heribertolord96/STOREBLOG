<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Blogmodels\PromocionTag::class, function (Faker $faker) {
    
    
    return [
        
        'promocion_id' 	=> rand(1,40),
        'tag_id' 	=> rand(1,120),
        
    ];
});
