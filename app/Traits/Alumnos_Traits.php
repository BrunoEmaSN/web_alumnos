<?php

namespace App\Traits;

use App\Alumno;

trait Alumnos_Traits {
    public function alumnos_show()
    {
        $alumnos = Alumno::join('datos_personales AS dp', 'dp.id_dp', '=', 'alumnos.id_a')
        ->join('requisitos_alumnos AS ra', 'ra.id_ra', '=', 'alumnos.id_a')
        ->select(
            'alumnos.fecha_agregado AS agregado',
            'dp.nombre',
            'dp.apellido',
            'dp.id_dp AS documento',
            'dp.tipo_documento AS tipo_documento',
            'alumnos.tipo_estado AS estado',
            'ra.partida_nacimiento',
            'ra.dni',
            'ra.cuil',
            'ra.foto_4x4',
            'ra.contrato'
        )
        ->get();

        $data = [];
        foreach ($alumnos as $a) {
            $data[] = array(
                'agregado' => $a->agregado,
                'nombre' => $a->nombre,
                'apellido' => $a->apellido,
                'documento' => view('paginas.alumnos.partes._documento', [
                    'documento' => $a->documento,
                    'tipo_documento' => $a->tipo_documento
                    ])->render(),
                'estado' => view('paginas.alumnos.partes._estado',[
                    'estado' => $a->estado
                    ])->render(),
                'faltantes' => view('paginas.alumnos.partes._faltantes',[
                    'partida_nacimiento' => $a->partida_nacimiento,
                    'dni' => $a->dni,
                    'cuil' => $a->cuil,
                    'foto_4x4' => $a->foto_4x4,
                    'contrato' => $a->contrato
                ])->render(),
                'opciones' => view('componentes._opciones',[
                    'show' => route('alumnos.show', $a->documento),
                    'edit' => route('alumnos.edit', $a->documento),
                    'delete' => route('alumnos.destroy', $a->documento)
                ])->render()
            );
        }

        $resultado = array(
            'draw' => 1,
            'recordsTotal' => sizeof($alumnos),
            'recordsFiltered' => sizeof($alumnos),
            'data' => $data
        );
        return json_encode($resultado);
    }
    public function alumnos_save($request, $alumnos)
    {
        $alumnos->id_a = $request->documento;
        $alumnos->nivel = $request->nivel;
        $alumnos->turno = $request->turno;
        $alumnos->tipo_estado = $request->estado;
        $alumnos->grado_ano = $request->grado_ano;
        $alumnos->division = $request->division;
        $alumnos->alumno_observaciones = $request->alumno_observaciones;

        return $alumnos;
    }

    public function validacion_request_alumnos()
    {
        return request()->validate([
            'grado_ano' => 'required',
            'division' => 'required'
        ]);
    }
}