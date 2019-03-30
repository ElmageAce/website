<?php

use Faker\Generator as Faker;
use App\Http\Models\Organizer\Organizer;
use App\Http\Models\Organizer\OrganizerEvent;
use App\Http\Models\Event\Event;

$factory->define(OrganizerEvent::class, function (Faker $faker) {
    $organizer_id = Organizer::all()->pluck('id')->all();
    $event_id = Event::all()->pluck('id')->all();
    
    return [
        'organizer_id' => $faker->randomElement($organizer_id),
        'event_id' => $faker->randomElement($event_id),
    ];
});
