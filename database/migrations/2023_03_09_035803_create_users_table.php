<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_usuario');
            $table->string('correo_usuario');
            $table->string('contrasena_usuario');
            $table->string('rol_usuario');
            //el grupo usuario debe ser un bigint pero no lo pude asignar desde laravel, asi que lo hice en phpmyadmin
            $table->string('grupo_usuario');
            $table->timestamps();

            //$table->foreign('grupo_usuario')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
