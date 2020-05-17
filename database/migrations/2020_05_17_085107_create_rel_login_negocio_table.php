<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelLoginNegocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('REL_LOGIN_NEGOCIO', function (Blueprint $table) {
            $table->unsignedInteger('FK_NEGOCIO');
            $table->foreign('FK_NEGOCIO')->references('NEGOCIO_ID')->on('MA_NEGOCIOS');
            
            $table->string('FK_USUARIO',150);
            // $table->foreign('FK_USUARIO')->references('LOGIN_USUARIO')->on('MA_LOGIN_NEGOCIOS');

            $table->string('FK_CELULAR',10);
            // $table->foreign('FK_CELULAR')->references('LOGIN_NUMERO')->on('MA_LOGIN_NEGOCIOS');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('REL_LOGIN_NEGOCIO');
    }
}
