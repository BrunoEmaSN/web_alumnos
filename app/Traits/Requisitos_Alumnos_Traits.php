<?php

namespace App\Traits;

trait Requisitos_Alumnos_Traits {
    public function requisitos_alumnos_save($request, $requisitos_alumnos)
    {
        $requisitos_alumnos->id_ra = $request->documento;
        $requisitos_alumnos->partida_nacimiento = ($request->partida_nacimiento == 'on')?1:0;
        $requisitos_alumnos->dni = ($request->dni == 'on')?1:0;
        $requisitos_alumnos->cuil = ($request->cuil == 'on')?1:0;
        $requisitos_alumnos->foto_4x4 = ($request->foto_4x4 == 'on')?1:0;
        $requisitos_alumnos->contrato = ($request->contrato == 'on')?1:0;

        return $requisitos_alumnos;
    }
}