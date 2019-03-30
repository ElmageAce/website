<?php

use Faker\Generator as Faker;
use App\Http\Models\Performer\Performer;

$factory->define(Performer::class, function (Faker $faker) {

    return [
        'full_name' => $faker->name,
        'type' => $faker->jobTitle,
        'status' => true,
    ];
});
