<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelNegocioPromocionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('REL_NEGOCIO_PROMOCIONES', function (Blueprint $table) {
            $table->unsignedInteger('FK_NEGOCIO');
            $table->foreign('FK_NEGOCIO')->references('NEGOCIO_ID')->on('MA_NEGOCIOS');

            $table->unsignedInteger('FK_PROMOCION');
            $table->foreign('FK_PROMOCION')->references('PROMOCIONES_ID')->on('MA_PROMOCIONES_NEGOCIO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('REL_NEGOCIO_PROMOCIONES');
    }
}
