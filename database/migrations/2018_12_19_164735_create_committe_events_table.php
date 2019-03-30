<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitteEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committe_events', function (Blueprint $table) {
            $table->unsignedInteger('committe_id');
            $table->foreign('committe_id')
                ->references('id')->on('committes')->onDelete('restrict');
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
        Schema::dropIfExists('committe_events');
    }
}
