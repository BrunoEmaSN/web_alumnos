<?php

namespace App\Traits;

trait Datos_Padres_Traits {
    public function datos_padres_save($request, $padres)
    {
        $padres->id_dpa = $request->documento;
        $padres->cuil = $request->cuil;
        $padres->nivel_academico = $request->nivel_academico;
        $padres->situacion_academica = $request->situacion_academica;
        $padres->profesion = $request->profesion;

        return $padres;
    }
}