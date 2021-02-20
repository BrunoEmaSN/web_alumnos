<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosPadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_padres', function (Blueprint $table) {
            $table->integer('id_dpa')->unsigned();
            $table->primary('id_dpa');

            $table->integer('cuil');
            $table->char('situacion_academica', 1);
            $table->text('profesion', 50);
            $table->timestamps();
        });
        
        Schema::table('datos_padres', function (Blueprint $table) {
            $table->foreign('id_dpa')->references('id_t')->on('tutores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_padres');
    }
}
