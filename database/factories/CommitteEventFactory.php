<?php

use Faker\Generator as Faker;
use App\Http\Models\Committe\CommitteEvent;
use App\Http\Models\Committe\Committe;
use App\Http\Models\Event\Event;

$factory->define(CommitteEvent::class, function (Faker $faker) {
    $committe_id = Committe::all()->pluck('id')->all();
    $event_id = Event::all()->pluck('id')->all();
    
    return [
        'committe_id' => $faker->randomElement($committe_id),
        'event_id' => $faker->randomElement($event_id),
    ];
});
