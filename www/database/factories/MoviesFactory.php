<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Movies;
use App\Models\Genres;
use App\Models\Categoria;
use Faker\Generator as Faker;

$factory->define(Movies::class, function (Faker $faker) {
    return [
            "name"=>$faker->city,
            "description"=>$faker->realText($maxNbChars = 50, $indexSize = 1),
            "synopsis"=>$faker->realText($maxNbChars = 100, $indexSize = 1),
            "id_genre"=>$faker->randomDigitNotNull,
            "id_categoria"=>$faker->randomDigitNotNull
    ];
});
