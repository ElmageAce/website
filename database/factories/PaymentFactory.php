<?php

use Faker\Generator as Faker;
use App\Http\Models\Ticket\Ticket;
use App\Http\Models\Participant\Participant;
use App\Http\Models\Payment\Payment;

$factory->define(Payment::class, function (Faker $faker) {
    $model_data = [
		'participant_ids' => Participant::all()->pluck('id')->all(),
        'tickets' => Ticket::with(['event'])
                    ->get(['id', 'price', 'qty','event_id','status'])->toArray(),
	];
    
    $tickets = $faker->randomElement($model_data['tickets']);
    $qty = 10;
    $subtotal = $tickets['price'];

    return [
        'payment_id' => $faker->randomNumber(),
        'ticket_id' => $tickets['id'],
        'participant_id' => $faker->randomElement($model_data['participant_ids']),
        'payment_date' => $faker->datetime(),
        'verification_date' => $faker->datetime(),
        'qty' => $qty,
        'subtotal' => $subtotal,
        'total' => $qty * $subtotal,
        'proof_payment' => $faker->imageUrl($width = 200, $height = 200),
        'status' => true,
    ];
});
