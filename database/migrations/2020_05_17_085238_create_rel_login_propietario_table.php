<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelLoginPropietarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('REL_LOGIN_PROPIETARIO', function (Blueprint $table) {
            $table->unsignedInteger('FK_PROPIETARIO');
            $table->foreign('FK_PROPIETARIO')->references('PROPIETARIO_ID')->on('MA_PROPIETARIO_NEGOCIO');
            
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
        Schema::dropIfExists('rel_login_propietario');
    }
}
