<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateSubdistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subdistricts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('province_id')
                ->references('id')->on('provinces')->onDelete('restrict');
            $table->unsignedInteger('city_id')
                ->references('id')->on('cities')->onDelete('restrict');
            $table->unsignedInteger('district_id')
                ->references('id')->on('districts')->onDelete('restrict');
            $table->string('name',100);
            $table->string('postal_code',15);
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
        Schema::dropIfExists('subdistricts');
    }
}
