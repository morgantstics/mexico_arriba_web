<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelNegocioGiroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('REL_NEGOCIO_GIRO', function (Blueprint $table) {
            $table->unsignedInteger('FK_NEGOCIO');
            $table->foreign('FK_NEGOCIO')->references('NEGOCIO_ID')->on('MA_NEGOCIOS');

            $table->unsignedInteger('FK_GIRO');
            $table->foreign('FK_GIRO')->references('GIROS_ID')->on('MA_CAT_GIROS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('REL_NEGOCIO_GIRO');
    }
}
