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
            $table->id('id_ta');
            $table->integer('id_t')->unsigned();
            $table->integer('id_a')->unsigned();
            $table->boolean('conviven_con_alumno');
            $table->timestamps();
        });
        
        Schema::table('tutores_alumnos', function (Blueprint $table) {
            $table->foreign('id_t')->references('id_t')->on('tutores');
            $table->foreign('id_a')->references('id_a')->on('alumnos');
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
