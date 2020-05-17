<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropietarioNegocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MA_PROPIETARIO_NEGOCIO', function (Blueprint $table) {
            $table->increments('PROPIETARIO_ID');
            $table->string('PROPIETARIO_NOMBRE');
            $table->string('PROPIETARIO_TELEFONO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MA_PROPIETARIO_NEGOCIO');
    }
}
