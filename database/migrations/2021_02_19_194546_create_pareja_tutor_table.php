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
            $table->BigInteger('id_pat')->unsigned();
            $table->primary('id_pat');

            $table->string('pareja_nombre', 75);
            $table->string('pareja_apellido', 75);
            $table->BigInteger('pareja_dni')->unsigned();
            $table->string('pareja_telefono_fijo', 15)->nullable($value = true);
            $table->string('pareja_telefono_movil', 15)->nullable($value = true);
            $table->timestamps();
        });

        Schema::table('pareja_tutor', function (Blueprint $table) {
            $table->foreign('id_pat')->references('id_t')->on('tutores');
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
