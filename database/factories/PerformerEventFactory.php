<?php

use Faker\Generator as Faker;
use App\Http\Models\Performer\Performer;
use App\Http\Models\Performer\PerformerEvent;
use App\Http\Models\Event\Event;

$factory->define(PerformerEvent::class, function (Faker $faker) {
    $performer_id = Performer::all()->pluck('id')->all();
    $event_id = Event::all()->pluck('id')->all();
    
    return [
        'performer_id' => $faker->randomElement($performer_id),
        'event_id' => $faker->randomElement($event_id),
    ];
});
