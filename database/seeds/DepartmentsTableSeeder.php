<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Department\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Department::class, 10)
            ->create();
    }
}
