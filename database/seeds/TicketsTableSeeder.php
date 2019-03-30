<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Ticket\Ticket;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ticket::class, 15)
            ->create();
    }
}
