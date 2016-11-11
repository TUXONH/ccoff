<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('telefono_casa');
            $table->string('telefono_celular', 35);
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('direccion');
            $table->string('pais');
            $table->string('ciudad');
            $table->integer('cp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('costumers');
    }
}
