<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Datos_Personales_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datos_personales')->insert([
            'id_dp' => 1,
            'tipo_documento' => 'DNI',
            'nombre' => 'Jonathan',
            'apellido' => 'Joestar',
            'fecha_nacimiento' => '1868-04-04',
            'sexo' => 'M',
            'estado_civil' => 'S',
            'nacionalidad' => 'Argentino',
            'lugar_nacimiento' => 'Argentina',
            'telefono_fijo' => '111111111111111',
            'telefono_movil' => '111111111111111',
            'domicilio' => 'mi hogar',
            'numero' => 40,
            'departamento' => null,
            'piso' => 0
        ]);
    }
}
