<?php

use Faker\Generator as Faker;
use Faker\Provider as FakerProvider;
use Bezhanov\Faker\Provider as FakerBezhanov;
use App\Http\Models\Department\Department;
use App\Http\Models\Participant\Participant;

$factory->define(Participant::class, function (Faker $faker) {
    $faker->addProvider(new FakerProvider\en_ZA\PhoneNumber($faker));
    $faker->addProvider(new FakerBezhanov\Demographic($faker));
    $department_id = Department::all()->pluck('id')->all();
    $id = 1;

    return [
        'full_name' => $faker->name,
        'identity_number' => $faker->randomNumber(),
        'photo' => $faker->imageUrl($width = 200, $height = 200),
        'sex' => $faker->gender,
        'address' => $faker->address,
        'province_id' => $id,
        'city_id' => $id,
        'district_id' => $id,
        'subdistrict_id' => $id,
        'home_phone' => $faker->tollFreeNumber,
        'mobile_phone' => $faker->mobileNumber,
        'department_id' => $faker->randomElement($department_id),
    ];
});
