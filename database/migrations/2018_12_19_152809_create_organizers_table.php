<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identity_id');
            $table->string('photo')->nullable();
            $table->string('full_name');
            $table->text('address');
            $table->string('home_phone', 15)->nullable();
            $table->string('mobile_phone', 15)->nullable();
            $table->string('line_id', 20)->nullable();
            $table->string('instagram_id', 20)->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('website_link')->nullable();
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
        Schema::dropIfExists('organizers');
    }
}
