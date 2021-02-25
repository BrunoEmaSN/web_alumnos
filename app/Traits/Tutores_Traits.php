<?php

namespace App\Traits;

trait Tutores_Traits {
    public function tutores_save($request, $tutores)
    {
        $tutores->id_t = $request->documento;
        switch ($request->tipo_tutor) {
            case 'P':
                $tutores->relacion_parentesco = 'Padre';
                break;

            case 'M':
                $tutores->relacion_parentesco = 'Madre';
                break;
            
            case 'O':
                $tutores->relacion_parentesco = $request->relacion_parentesco;
                break;
        }
        $tutores->tipo_tutor = $request->tipo_tutor;
        $tutores->tiene_pareja = ($request->tiene_pareja == 'on')?1:0;
        $tutores->telefono_laboral = $request->telefono_laboral;
        $tutores->ocupacion = $request->ocupacion;

        return $tutores;
    }
}