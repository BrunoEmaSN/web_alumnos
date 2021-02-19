<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->id('id_tutores');
            $table->unsignedBigInteger('id_datos_personales');
            $table->text('relacion_parentesco', 50);
            $table->boolean('conviven_con_alumno');
            $table->char('tipo_tutor', 1);
            $table->boolean('tiene_pareja');
            $table->string('telefono_laboral', 15);
            $table->string('ocupacion', 50);
            $table->timestamps();
        });
        
        Schema::table('tutores', function (Blueprint $table) {
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
        Schema::dropIfExists('docentes');
    }
}
