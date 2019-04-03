<?php

use Faker\Generator as Faker;
use App\Http\Models\User\User;

$factory->define(User::class, function (Faker $faker) {
    
    $emails = $faker->email();
    
    return [
        'email' => $emails,
        'password' => bcrypt('secret'),
    ];
});
