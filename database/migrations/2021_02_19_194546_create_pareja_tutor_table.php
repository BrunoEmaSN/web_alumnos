<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParejaTutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pareja_tutor', function (Blueprint $table) {
            $table->id('id_pareja_tutor');
            $table->unsignedBigInteger('id_tutores');
            $table->string('pareja_nombre', 75);
            $table->string('pareja_apellido', 75);
            $table->integer('pareja_dni');
            $table->string('pareja_telefono_fijo', 15);
            $table->string('pareja_telefono_movil', 15);
            $table->timestamps();
        });

        Schema::table('pareja_tutor', function (Blueprint $table) {
            $table->foreign('id_tutores')->references('id_tutores')->on('tutores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pareja_tutor');
    }
}
