<?php

use Faker\Generator as Faker;
use App\Http\Models\Event\PostEvent;
use App\Http\Models\Event\Event;

$factory->define(PostEvent::class, function (Faker $faker) {
    
    $event_id = Event::all()->pluck('id')->all();
    
    return [
        'event_id' => $faker->randomElement($event_id),
        'post_image' => $faker->imageUrl($width = 200, $height = 200),
    ];
});
