<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaNegocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MA_NEGOCIOS', function (Blueprint $table) {
            $table->increments('NEGOCIO_ID');
            $table->string('NEGOCIO_NOMBRE');
            $table->string('NEGOCIO_DIRECCION');
            $table->string('NEGOCIO_LATITUD');
            $table->string('NEGOCIO_LONGITUD');
            $table->string('NEGOCIO_HORA_APERTURA');
            $table->string('NEGOCIO_HORA_CIERRE');
            $table->string('NEGOCIO_TELEFONO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MA_NEGOCIOS');
    }
}
