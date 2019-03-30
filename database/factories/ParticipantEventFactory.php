<?php   

use Faker\Generator as Faker;
use App\Http\Models\Participant\Participant;
use App\Http\Models\Participant\ParticipantEvent;
use App\Http\Models\Event\Event;

$factory->define(ParticipantEvent::class, function (Faker $faker) {
    $participant_id = Participant::all()->pluck('id')->all();
    $event_id = Event::all()->pluck('id')->all();

    return [
        'participant_id' => $faker->randomElement($participant_id),
        'event_id' => $faker->randomElement($event_id),
        'attendance_status' => $faker->word,
        'rating' => mt_rand(1,5),
        'comment' => $faker->sentence(10),
    ];
});
