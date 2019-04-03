<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('address');
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('district_id');
            $table->unsignedInteger('subdistrict_id');
            $table->integer('postal_code');
            $table->text('description');
            $table->unsignedInteger('event_type_id');
            $table->foreign('event_type_id')
                ->references('id')->on('event_types')->onDelete('restrict');
            $table->string('brochure');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('home_phone', 15)->nullable();
            $table->string('mobile_phone', 15)->nullable();
            $table->string('full_name_pic');
            $table->string('website_link')->nullable();
            $table->string('qrcode');
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
        Schema::dropIfExists('events');
    }
}
