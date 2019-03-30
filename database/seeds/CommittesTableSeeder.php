<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Committe\Committe;

class CommittesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Committe::class, 10)
            ->create();
    }
}
