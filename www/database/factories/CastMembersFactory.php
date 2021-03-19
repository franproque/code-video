<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CastMembers;
use Faker\Generator as Faker;

$factory->define(CastMembers::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'type'=>$faker->numberBetween($min = 1, $max = 2)
    ];
});
