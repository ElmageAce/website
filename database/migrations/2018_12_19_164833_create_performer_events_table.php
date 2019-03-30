<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerformerEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performer_events', function (Blueprint $table) {
            $table->unsignedInteger('performer_id');
            $table->foreign('performer_id')
                ->references('id')->on('performers')->onDelete('restrict');
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
        Schema::dropIfExists('performer_events');
    }
}
