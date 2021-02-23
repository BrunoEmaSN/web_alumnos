<?php

namespace App\Traits;

trait Alumnos_Traits {
    public function alumnos_save($request, $alumnos)
    {
        $alumnos->id_a = $request->documento;
        $alumnos->fecha_agregado = $request->fecha_agregado;
        $alumnos->nivel = $request->nivel;
        $alumnos->turno = $request->turno;
        $alumnos->tipo_estado = $request->estado;
        $alumnos->grado_ano = $request->grado_ano;
        $alumnos->division = $request->division;
        $alumnos->lugar_nacimiento = $request->lugar_nacimiento;
        $alumnos->alumno_observaciones = $request->alumno_observaciones;

        return $alumnos;
    }
}