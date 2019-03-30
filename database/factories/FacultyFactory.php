<?php

use Faker\Generator as Faker;
use Bezhanov\Faker\Provider as FakerProvider;
use App\Http\Models\Faculty\Faculty;

$factory->define(Faculty::class, function (Faker $faker) {
    $faker->addProvider(new FakerProvider\Educator($faker));

    return [
        'name' => $faker->campus,
        'status' => true,
    ];
});
