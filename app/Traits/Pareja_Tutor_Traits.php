<?php

namespace App\Traits;

trait Pareja_Tutor_Traits {
    public function pareja_tutor_save($request, $pareja_tutor)
    {
        $pareja_tutor->id_pat = $request->documento;
        $pareja_tutor->pareja_nombre = $request->pareja_nombre;
        $pareja_tutor->pareja_apellido = $request->pareja_apellido;
        $pareja_tutor->pareja_dni = $request->pareja_dni;
        $pareja_tutor->pareja_telefono_fijo = $request->pareja_telefono_fijo;
        $pareja_tutor->pareja_telefono_movil = $request->pareja_telefono_movil;

        return $pareja_tutor;
    }
    public function pareja_tutor_delete($pareja_tutor)
    {
        if ($pareja_tutor != '') {
            $pareja_tutor->delete();
        }
    }
}