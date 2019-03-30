<?php

use Faker\Generator as Faker;
use Faker\Provider as FakerProvider;
use App\Http\Models\Organizer\Organizer;

$factory->define(Organizer::class, function (Faker $faker) {
    $faker->addProvider(new FakerProvider\en_ZA\PhoneNumber($faker));
    $faker->addProvider(new FakerProvider\Internet($faker));

    return [
        'identity_id' => $faker->randomNumber(),
        'photo' => $faker->imageUrl($width = 200, $height = 200),
        'full_name' => $faker->name,
        'address' => $faker->address,
        'home_phone' => $faker->tollFreeNumber,
        'mobile_phone' => $faker->mobileNumber,
        'line_id' => $faker->word,
        'instagram_id' => $faker->word,
        'facebook_id' => $faker->word,
        'website_link' => $faker->word,
    ];
});
