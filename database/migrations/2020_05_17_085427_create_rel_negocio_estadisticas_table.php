<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelNegocioEstadisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('REL_NEGOCIO_ESTADISTICAS', function (Blueprint $table) {
            $table->unsignedInteger('FK_NEGOCIO');
            $table->foreign('FK_NEGOCIO')->references('NEGOCIO_ID')->on('MA_NEGOCIOS');

            $table->unsignedInteger('FK_ESTADISTICA');
            $table->foreign('FK_ESTADISTICA')->references('ESTADISTICAS_ID')->on('MA_CAT_ESTADISTICAS');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('REL_NEGOCIO_ESTADISTICAS');
    }
}
