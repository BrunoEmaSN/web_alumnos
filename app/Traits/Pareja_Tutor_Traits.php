<?php

namespace App\Traits;

trait Pareja_Tutor_Traits {
    public function pareja_tutor_save($request, $pareja_tutore)
    {
        $pareja_tutore->id_pat = $request->documento;
        $pareja_tutore->pareja_nombre = $request->pareja_nombre;
        $pareja_tutore->pareja_apellido = $request->pareja_apellido;
        $pareja_tutore->pareja_dni = $request->pareja_dni;
        $pareja_tutore->pareja_telefono_fijo = $request->pareja_telefono_fijo;
        $pareja_tutore->pareja_telefono_movil = $request->pareja_telefono_movil;

        return $pareja_tutore;
    }
}