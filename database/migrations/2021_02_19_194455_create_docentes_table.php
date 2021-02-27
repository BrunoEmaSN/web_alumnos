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
            $table->BigInteger('id_d')->unsigned();
            $table->primary('id_d');

            $table->date('fecha_agregado');
            $table->string('sedes', 50)->nullable($value = true);
            $table->text('titulo', 50)->nullable($value = true);
            $table->BigInteger('cuit')->unsigned()->nullable($value = true);
            $table->boolean('subencionado')->nullable($value = true);
            $table->boolean('contratado')->nullable($value = true);
            $table->boolean('monotributista')->nullable($value = true);
            $table->boolean('estado')->nullable($value = true);
            $table->string('docente_observaciones', 80)->nullable($value = true);
            $table->timestamps();
        });
        
        Schema::table('docentes', function (Blueprint $table) {
            $table->foreign('id_d')->references('id_dp')->on('datos_personales');
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
