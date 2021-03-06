<?php

namespace App\Traits;

trait Tutores_Traits {
    public function tutores_save($request, $tutores)
    {
        $tutores->id_t = $request->documento;
        $tutores->tiene_pareja = ($request->tiene_pareja == 'on')?1:0;
        $tutores->telefono_laboral = $request->telefono_laboral;
        $tutores->ocupacion = $request->ocupacion;
        $tutores->cuil = $request->cuil;
        $tutores->nivel_academico = $request->nivel_academico;
        $tutores->situacion_academica = $request->situacion_academica;
        $tutores->profesion = $request->profesion;

        return $tutores;
    }

    public function validacion_request_tutores()
    {
        return request()->validate([
            'situacion_academica' => 'required'
        ]);
    }

    public function validacion_request_pareja_tutor()
    {
        return request()->validate([
            'pareja_nombre' => 'required',
            'pareja_apellido' => 'required',
            'pareja_dni' => 'required'
        ]);
    }
}