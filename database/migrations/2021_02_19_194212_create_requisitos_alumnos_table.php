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
            $table->id('id_requisitos_alumnos');
            $table->boolean('partida_nacimiento');
            $table->boolean('dni');
            $table->boolean('cuil');
            $table->boolean('foto_4x4');
            $table->boolean('contrato');
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
        Schema::dropIfExists('requisitos_alumnos');
    }
}
