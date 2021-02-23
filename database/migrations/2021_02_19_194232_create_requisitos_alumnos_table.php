<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitosAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitos_alumnos', function (Blueprint $table) {
            $table->integer('id_ra')->unsigned()->nullable($value = true);
            $table->primary('id_ra');

            $table->boolean('partida_nacimiento')->nullable($value = true);
            $table->boolean('dni')->nullable($value = true);
            $table->boolean('cuil')->nullable($value = true);
            $table->boolean('foto_4x4')->nullable($value = true);
            $table->boolean('contrato')->nullable($value = true);
            $table->timestamps();
        });

        Schema::table('requisitos_alumnos', function (Blueprint $table) {
            $table->foreign('id_ra')->references('id_a')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requisitos_alumnos');
    }
}
