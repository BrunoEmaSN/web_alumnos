<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id('id_alumnos');
            $table->unsignedBigInteger('id_datos_personales');
            $table->unsignedBigInteger('id_requisitos_alumnos');
            $table->char('nivel', 1);
            $table->smallinteger('grado_ano');
            $table->char('division', 1);
            $table->char('tipo_estado', 1);
            $table->string('lugar_nacimiento', 75);
            $table->string('alumno_observaciones', 80);
            $table->timestamps();
        });
        Schema::table('alumnos', function (Blueprint $table) {
            $table->foreign('id_datos_personales')->references('id_datos_personales')->on('datos_personales');
            $table->foreign('id_requisitos_alumnos')->references('id_requisitos_alumnos')->on('requisitos_alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
