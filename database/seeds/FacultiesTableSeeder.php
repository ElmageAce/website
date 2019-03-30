<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Faculty\Faculty;

class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Faculty::class, 5)
            ->create();
    }
}
