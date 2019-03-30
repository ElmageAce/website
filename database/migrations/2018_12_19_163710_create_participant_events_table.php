<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant_events', function (Blueprint $table) {
            $table->unsignedInteger('participant_id');
            $table->foreign('participant_id')
                ->references('id')->on('participants')->onDelete('restrict');
            $table->unsignedInteger('event_id');
            $table->foreign('event_id')
                ->references('id')->on('events')->onDelete('restrict');    
            $table->string('attendance_status');
            $table->enum('rating',[ 1, 2, 3, 4, 5] )->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('participant_events');
    }
}
