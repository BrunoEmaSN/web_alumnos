<?php

namespace App\Traits;

use App\Tutor_Alumno;

trait Tutores_Alumnos_Traits {
    public function tutores_alumnos_save($request)
    {
        if ($request->tutor_parentesco != '') {
            for ($i=0; $i < sizeof($request->tutor_parentesco); $i++) { 
                $tutores_alumnos = new Tutor_Alumno;
    
                $tutores_alumnos->id_t = $request->tutor_documento[$i];
                $tutores_alumnos->id_a = $request->documento;
                $tutores_alumnos->conviven_con_alumno = ($request->conviven_con_alumno[$i] == 'on')?1:0;
                $tutores_alumnos->relacion_parentesco = $request->tutor_parentesco[$i];
    
                $tutores_alumnos->save();
            }
        }
    }
    
    public function tutores_alumnos_delete($id)
    {
        $tutores_alumnos = Tutor_Alumno::where(
            'id_a', $id
        )
        ->delete();
    }
}