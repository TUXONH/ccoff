<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha_venta');
            $table->string('canal')->default('-');
            $table->string('departamento');
            $table->double('total_mxn')->default('0.00');
            $table->double('tipo_cambio')->default('0.00');
            $table->string('estatus_gral')->default('no completado');
            $table->longText('notas')->nullable();
            $table->timestamps();
            $table->integer('id_user')->unsigned();
            $table->integer('costumer_id')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('costumer_id')->references('id')->on('costumers');
        });
    }

    public function down()
    {
        Schema::drop('reservations');
    }
}
