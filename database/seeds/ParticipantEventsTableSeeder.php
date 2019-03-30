<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Participant\ParticipantEvent;

class ParticipantEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ParticipantEvent::class, 5)
            ->create();
    }
}
