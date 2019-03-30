<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Event\EventType;

class EventTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(EventType::class, 10)
            ->create();
    }
}
