<?php

use Faker\Generator as Faker;
use Faker\Provider as FakerProvider;
use App\Http\Models\Event\EventType;
use App\Http\Models\Event\Event;

$factory->define(Event::class, function (Faker $faker) {
    $faker->addProvider(new FakerProvider\en_ZA\PhoneNumber($faker));
    $event_type_id = EventType::all()->pluck('id')->all();
    $id = 1;

    return [
        'name' => $faker->sentence(),
        'address' => $faker->address,
        'province_id' => $id,
        'city_id' => $id,
        'district_id' => $id,
        'subdistrict_id' => $id,
        'postal_code' => $id,
        'description' => $faker->realText(rand(80, 600)),
        'event_type_id' => $faker->randomElement($event_type_id),
        'brochure' => $faker->imageUrl($width = 200, $height = 200),
        'start_date' => $faker->date(),
        'end_date' => $faker->date(),
        'start_time' => $faker->time(),
        'end_time' => $faker->time(),
        'home_phone' => $faker->tollFreeNumber,
        'mobile_phone' => $faker->mobileNumber,
        'full_name_pic' => $faker->tollFreeNumber,
        'website_link' => $faker->word,
        'qrcode' => $faker->ean13,
    ];
});
