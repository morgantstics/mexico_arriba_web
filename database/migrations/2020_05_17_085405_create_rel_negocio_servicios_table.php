<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelNegocioServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('REL_NEGOCIO_SERVICIOS', function (Blueprint $table) {
            $table->unsignedInteger('FK_NEGOCIO');
            $table->foreign('FK_NEGOCIO')->references('NEGOCIO_ID')->on('MA_NEGOCIOS');

            $table->unsignedInteger('FK_SERVICIO');
            $table->foreign('FK_SERVICIO')->references('SERVICIOS_ID')->on('MA_SERVICIOS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('REL_NEGOCIO_SERVICIOS');
    }
}
