<?php

use Faker\Generator as Faker;
use App\Http\Models\Event\EventType;

$factory->define(EventType::class, function (Faker $faker) {
    return [
        'category' => $faker->word,
        'type' => $faker->word,
        'level' => $faker->word,
        'total_points' => mt_rand(1,25),
        'status' => true,
    ];
});
