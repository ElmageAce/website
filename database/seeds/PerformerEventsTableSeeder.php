<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Performer\PerformerEvent;

class PerformerEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PerformerEvent::class, 5)
            ->create();
    }
}
