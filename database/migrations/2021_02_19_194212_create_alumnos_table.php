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
            $table->integer('id_a')->unsigned()->nullable($value = true);
            $table->primary('id_a');

            $table->date('fecha_agregado')->nullable($value = true);
            $table->char('nivel', 1)->nullable($value = true);
            $table->char('turno', 1)->nullable($value = true);
            $table->smallinteger('grado_ano')->nullable($value = true);
            $table->char('division', 1)->nullable($value = true);
            $table->char('tipo_estado', 1)->nullable($value = true);
            $table->string('lugar_nacimiento', 75)->nullable($value = true);
            $table->string('alumno_observaciones', 80)->nullable($value = true);
            $table->timestamps();
        });
        Schema::table('alumnos', function (Blueprint $table) {
            $table->foreign('id_a')->references('id_dp')->on('datos_personales');
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
