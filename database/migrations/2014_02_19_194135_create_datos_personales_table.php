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
            $table->integer('id_dp')->unsigned()->nullable($value = true);
            $table->primary('id_dp');

            $table->char('tipo_documento', 1)->nullable($value = true);
            $table->string('nombre', 75)->nullable($value = true);
            $table->string('apellido', 75)->nullable($value = true);
            $table->date('fecha_nacimiento')->nullable($value = true);
            $table->char('sexo', 1)->nullable($value = true);
            $table->char('estado_civil', 1)->nullable($value = true);
            $table->text('nacionalidad', 70)->nullable($value = true);
            $table->string('telefono_fijo', 15)->nullable($value = true);
            $table->string('telefono_movil', 15)->nullable($value = true);
            $table->string('domicilio', 100)->nullable($value = true);
            $table->integer('numero')->nullable($value = true);
            $table->string('departamento', 75)->nullable($value = true);
            $table->integer('piso')->nullable($value = true);
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
