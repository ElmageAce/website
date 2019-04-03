<?php

use Faker\Generator as Faker;
use App\Http\Models\Event\Event;
use App\Http\Models\Ticket\Ticket;

$factory->define(Ticket::class, function (Faker $faker) {
    $event_id = Event::all()->pluck('id')->all();
    $qty = 10;
    $price = 1000;
    
    return [
        'name' => $faker->word,
        'price' => $price,
        'event_id' => $faker->randomElement($event_id),
        'qty' => $qty,
    ];
});
