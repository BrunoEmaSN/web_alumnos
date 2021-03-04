<?php

namespace App\Traits;

trait Docentes_Traits {
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