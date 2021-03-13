<?php

namespace App\Traits;

use App\Tutor;

trait Tutores_Traits {
    public function tutores_show()
    {
        $tutores = Tutor::join('datos_personales AS dp', 'dp.id_dp', '=', 'tutores.id_t')
            ->select(
                'dp.nombre',
                'dp.apellido',
                'dp.id_dp AS documento',
                'dp.tipo_documento',
                'tutores.telefono_laboral',
                'dp.telefono_fijo',
                'dp.telefono_movil'
            )
            ->get();
        $data = [];
        foreach ($tutores as $t) {
            $data[] = array(
                'documento' => $t->documento,
                'nombre' => $t->nombre,
                'apellido' => $t->apellido,
                'contacto' => view('paginas.tutores.partes._contacto', [
                    'telefono_laboral' => $t->telefono_laboral,
                    'telefono_fijo' => $t->telefono_fijo,
                    'telefono_movil' => $t->telefono_movil
                ])->render(),
                'opciones' => view('componentes._opciones',[
                    'show' => route('tutores.show', $t->documento),
                    'edit' => route('tutores.edit', $t->documento),
                    'delete' => route('tutores.destroy', $t->documento)
                ])->render()
            );
        }

        $resultado = array(
            'draw' => 1,
            'recordsTotal' => sizeof($tutores),
            'recordsFiltered' => sizeof($tutores),
            'data' => $data
        );
        return json_encode($resultado);
    }
    
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