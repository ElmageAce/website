<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Event\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Event::class, 5)
            ->create();
    }
}
