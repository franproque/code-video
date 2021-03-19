<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Movies_CastMemer;
use Faker\Generator as Faker;

$factory->define(Movies_CastMemer::class, function (Faker $faker) {
    return [
                 "id_movie"=>$faker->numberBetween($min = 1, $max = 10),
                "id_cast_member"=>$faker->numberBetween($min = 1, $max = 10)
        
    ];
});
