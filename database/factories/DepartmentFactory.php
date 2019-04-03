<?php

use Faker\Generator as Faker;
use Bezhanov\Faker\Provider as FakerProvider;
use App\Http\Models\Faculty\Faculty;
use App\Http\Models\Department\Department;

$factory->define(Department::class, function (Faker $faker) {
    $faker->addProvider(new FakerProvider\Educator($faker));
    $faculty_id = Faculty::all()->pluck('id')->all();

    return [
        'name' => $faker->course,
        'faculty_id' => $faker->randomElement($faculty_id),
    ];
});
