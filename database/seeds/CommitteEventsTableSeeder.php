<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Committe\CommitteEvent;

class CommitteEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CommitteEvent::class, 5)
            ->create();
    }
}
