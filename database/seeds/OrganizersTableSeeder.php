<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Organizer\Organizer;

class OrganizersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Organizer::class, 10)
            ->create();
    }
}
