<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->id('id_datos_personales');
            $table->string('nombre', 75);
            $table->string('apellido', 75);
            $table->date('fecha_nacimiento');
            $table->char('sexo', 1);
            $table->integer('dni');
            $table->char('estado_civil', 1);
            $table->text('nacionalidad', 70);
            $table->char('tipo_documento', 1);
            $table->integer('documento');
            $table->string('telefono_fijo', 15);
            $table->string('telefono_movil', 15);
            $table->string('domicilio', 100);
            $table->integer('numero');
            $table->string('departamento', 75);
            $table->integer('piso');
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
        Schema::dropIfExists('datos_personales');
    }
}
