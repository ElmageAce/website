<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Participant\Participant;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Participant::class, 10)
            ->create();
    }
}
