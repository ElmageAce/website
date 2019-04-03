<?php

use Faker\Generator as Faker;
use App\Http\Models\Committe\Committe;

$factory->define(Committe::class, function (Faker $faker) {

    return [
        'full_name' => $faker->name,
        'identity_number' => $faker->randomNumber(),
        'position' => $faker->jobTitle,
    ];
});
