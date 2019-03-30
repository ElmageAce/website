<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Performer\Performer;

class PerformersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Performer::class, 15)
            ->create();
    }
}
