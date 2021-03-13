<?php

namespace App\Traits;

use App\Docente;

trait Docentes_Traits {
    public function docentes_show()
    {
        $docentes = Docente::join('datos_personales AS dp', 'dp.id_dp', '=', 'docentes.id_d')
            ->select(
                'dp.id_dp as documento',
                'docentes.cuit',
                'dp.nombre',
                'dp.apellido',
                'docentes.titulo',
                'docentes.subencionado',
                'docentes.contratado',
                'docentes.monotributista'
            )
            ->get();
        $data = [];
        foreach ($docentes as $d) {
            $data[] = array(
                'cuit' => $d->cuit,
                'nombre' => $d->nombre,
                'apellido' => $d->apellido,
                'titulo' => $d->titulo,
                'contrato' => view('paginas.docentes.partes._contrato', [
                    'subencionado' => $d->subencionado,
                    'contratado' => $d->contratado,
                    'monotributista' => $d->monotributista
                ])->render(),
                'opciones' => view('componentes._opciones',[
                    'show' => route('docentes.show', $d->documento),
                    'edit' => route('docentes.edit', $d->documento),
                    'delete' => route('docentes.destroy', $d->documento)
                ])->render()
            );
        }

        $resultado = array(
            'draw' => 1,
            'recordsTotal' => sizeof($docentes),
            'recordsFiltered' => sizeof($docentes),
            'data' => $data
        );
        return json_encode($resultado);
    }
    public function docentes_save($request, $docentes)
    {
        $docentes->id_d = $request->documento;
        $docentes->cuit = $request->cuit;
        $docentes->sedes = $request->sedes;
        $docentes->titulo = $request->titulo;
        $docentes->subencionado = ($request->subencionado == 'on')?1:0;
        $docentes->contratado = ($request->contratado == 'on')?1:0;
        $docentes->monotributista = ($request->monotributista == 'on')?1:0;
        $docentes->estado = false;
        $docentes->docente_observaciones = $request->docente_observaciones;

        return $docentes;
    }
    
    public function validacion_request_docentes()
    {
        return request()->validate([
            'cuit' => 'required',
            'titulo' => 'required'
        ]);
    }
}