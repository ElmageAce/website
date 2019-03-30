<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Payment\Payment;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Payment::class, 5)
            ->create();
    }
}
