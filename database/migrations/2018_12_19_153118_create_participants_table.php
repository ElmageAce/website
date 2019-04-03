<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('photo')->nullable();
            $table->string('identity_number',20);
            $table->string('gender');
            $table->text('address');
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('district_id');
            $table->unsignedInteger('subdistrict_id');
            $table->integer('postal_code')->nullable();
            $table->string('home_phone', 15)->nullable();
            $table->string('mobile_phone', 15)->nullable();
            $table->unsignedInteger('department_id');
            $table->foreign('department_id')
                ->references('id')->on('departments')->onDelete('restrict');
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
        Schema::dropIfExists('participants');
    }
}
