<?php

use Illuminate\Database\Seeder;
use App\Http\Models;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(FacultiesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(ParticipantsTableSeeder::class);
        $this->call(OrganizersTableSeeder::class);
        $this->call(CommittesTableSeeder::class);
        $this->call(PerformersTableSeeder::class);
        $this->call(EventTypesTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(OrganizerEventsTableSeeder::class);
        $this->call(CommitteEventsTableSeeder::class);
        $this->call(PerformerEventsTableSeeder::class);
        $this->call(ParticipantEventsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(PostEventsTableSeeder::class);
    }
}
