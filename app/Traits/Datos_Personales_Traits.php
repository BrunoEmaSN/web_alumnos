<?php

namespace App\Traits;

trait Datos_Personales_Traits {
    public function datos_personales_save($request, $datos_personales)
    {
        $datos_personales->id_dp = $request->documento;
        $datos_personales->tipo_documento = $request->tipo_documento;
        $datos_personales->nombre = $request->nombre;
        $datos_personales->apellido = $request->apellido;
        $datos_personales->fecha_nacimiento = $request->fecha_nacimiento;
        $datos_personales->sexo = $request->sexo;
        $datos_personales->estado_civil = $request->estado_civil;
        $datos_personales->nacionalidad = $request->nacionalidad;
        $datos_personales->telefono_fijo = $request->telefono_fijo;
        $datos_personales->telefono_movil = $request->telefono_movil;
        $datos_personales->domicilio = $request->domicilio;
        $datos_personales->numero = $request->numero;
        $datos_personales->departamento = $request->departamento;
        $datos_personales->piso = $request->piso;

        return $datos_personales;
    }
}