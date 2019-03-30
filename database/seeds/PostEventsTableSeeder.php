<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Event\PostEvent;

class PostEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PostEvent::class, 15)
            ->create();
    }
}
