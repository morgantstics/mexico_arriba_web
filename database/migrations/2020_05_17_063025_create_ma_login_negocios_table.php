<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaLoginNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MA_LOGIN_NEGOCIOS', function (Blueprint $table) {
            $table->string('USUARIOS_USUARIO',150)->primary();
            $table->string('USUARIO_CONTRASENIA');
            $table->string('NUMERO',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MA_LOGIN_NEGOCIOS');
    }
}
