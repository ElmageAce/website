<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Organizer\OrganizerEvent;

class OrganizerEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OrganizerEvent::class, 5)
            ->create();
    }
}
