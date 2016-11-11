<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Payments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('cantidad');
            $table->string('tipo');
            $table->timestamps();
            $table->integer('reservation_id')->unsigned();
            $table->foreign('reservation_id')->references('id')->on('reservations');
        });
    }

    public function down()
    {
        Schema::drop('payments');
    }
}
