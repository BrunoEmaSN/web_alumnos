<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id('id_docentes');
            $table->unsignedBigInteger('id_datos_personales');
            $table->string('sede', 50);
            $table->text('titulo', 50);
            $table->string('carrera', 50);
            $table->integer('cuil');
            $table->boolean('estado');
            $table->string('docente_observaciones', 80);
            $table->timestamps();
        });
        
        Schema::table('docentes', function (Blueprint $table) {
            $table->foreign('id_datos_personales')->references('id_datos_personales')->on('datos_personales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutores');
    }
}
