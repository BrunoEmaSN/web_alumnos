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
            $table->BigInteger('id_t')->unsigned();
            $table->primary('id_t');

            $table->BigInteger('cuil')->unsigned()->nullable($value = true);
            $table->char('nivel_academico', 1)->nullable($value = true);
            $table->char('situacion_academica', 1)->nullable($value = true);
            $table->text('profesion', 50)->nullable($value = true);
            $table->boolean('tiene_pareja')->nullable($value = true);
            $table->string('telefono_laboral', 15)->nullable($value = true);
            $table->string('ocupacion', 50)->nullable($value = true);
            $table->timestamps();
        });
        
        Schema::table('tutores', function (Blueprint $table) {
            $table->foreign('id_t')->references('id_dp')->on('datos_personales');
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
