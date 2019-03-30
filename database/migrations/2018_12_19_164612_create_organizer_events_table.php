<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizerEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizer_events', function (Blueprint $table) {
            $table->unsignedInteger('organizer_id');
            $table->foreign('organizer_id')
                ->references('id')->on('organizers')->onDelete('restrict');
            $table->unsignedInteger('event_id');
            $table->foreign('event_id')
                ->references('id')->on('events')->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizer_events');
    }
}
