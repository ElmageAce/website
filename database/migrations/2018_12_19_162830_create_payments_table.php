<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payment_id');
            $table->unsignedInteger('ticket_id');
            $table->foreign('ticket_id')
                ->references('id')->on('tickets')->onDelete('restrict');
            $table->unsignedInteger('participant_id');
            $table->foreign('participant_id')
                ->references('id')->on('participants')->onDelete('restrict');
            $table->datetime('payment_date');
            $table->datetime('verification_date');
            $table->unsignedInteger('qty');
            $table->decimal('subtotal', 15, 2);
            $table->decimal('total', 15, 2);
            $table->string('proof_payment');
            $table->boolean('status')
                ->default(True);
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
        Schema::dropIfExists('payments');
    }
}
