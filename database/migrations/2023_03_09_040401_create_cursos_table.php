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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_curso');
            //el kit robotica debe ser un bigint pero no lo pude asignar desde laravel, asi que lo hice en phpmyadmin
            $table->string('kit_robotica');
            $table->timestamps();

          
            //$table->foreign('kit_robotica')->references('id')->on('kits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};
