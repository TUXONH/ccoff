<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReservationService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_service', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->integer('id_service_detail');
            $table->integer('adultos')->default('0');
            $table->integer('ninos')->default('0');
            $table->date('fecha_llegada');
            $table->date('fecha_salida');
            $table->double('precio_pubico');
            $table->double('precio_neto');
            $table->double('pago_cliente');
            $table->date('fecha_pago');
            $table->string('pago_proveedor')->default('no confirmado');
            $table->string('status_gral_service');
            $table->timestamps();
            $table->integer('reservation_id')->unsigned();
            $table->foreign('reservation_id')->references('id')->on('reservations');
        });
    }
    public function down()
    {
        Schema::drop('reservation_service');
    }
}
