<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores_alumnos', function (Blueprint $table) {
            $table->id('id_tutores_alumnos');
            $table->unsignedBigInteger('id_tutores');
            $table->unsignedBigInteger('id_alumnos');
            $table->timestamps();
        });
        
        Schema::table('tutores_alumnos', function (Blueprint $table) {
            $table->foreign('id_tutores')->references('id_tutores')->on('tutores');
            $table->foreign('id_alumnos')->references('id_alumnos')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutores_alumnos');
    }
}
