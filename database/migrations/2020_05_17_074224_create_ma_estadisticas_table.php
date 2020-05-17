<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaEstadisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MA_CAT_ESTADISTICAS', function (Blueprint $table) {
            $table->increments('ESTADISTICAS_ID');
            $table->string('ESTADISTICAS_ESTADISTICA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MA_CAT_ESTADISTICAS');
    }
}
