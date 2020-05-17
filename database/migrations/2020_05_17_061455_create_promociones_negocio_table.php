<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromocionesNegocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MA_PROMOCIONES_NEGOCIO', function (Blueprint $table) {
            $table->increments('PROMOCIONES_ID');
            $table->string('PROMOCIONES_PROMOCION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PROMOCIONES_NEGOCIO');
    }
}
