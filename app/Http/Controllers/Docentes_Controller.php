<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Docente;
use App\Datos_Personales;

use App\Traits\Datos_Personales_Traits;
use App\Traits\Docentes_Traits;

class Docentes_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    use Datos_Personales_Traits;
    use Docentes_Traits;

    public function index()
    {
        return view('paginas.docentes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docentes = [
            'datos_docentes' => new Docente,
            'datos_personales' => new Datos_Personales
        ];
        return view('paginas.docentes.create', [
            'docentes' => $docentes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validacion_request_datos_personales($request->documento);
        $this->validacion_request_docentes();

        $datos_personales = $this->datos_personales_save($request, new Datos_Personales);
        $docentes = $this->docentes_save($request, new Docente);
        $docentes->fecha_agregado = date("Y-m-d");

        try {
            $datos_personales->save();
            $docentes->save();
        } catch (\Exception $e) {
            return back()
                ->with( 'status',['message' => 'error:'.$e->getMessage(), 'tipo' => 'error'])
                ->withInput();
        }
        
        return redirect()
            ->route('docentes.index')
            ->with( 'status',['message' =>'exito: se guardo', 'tipo' => 'exito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('paginas.docentes.show', [
            'docentes' => Docente::find($id),
            'datos_personales' => Datos_Personales::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docentes = [
            'datos_docentes' => Docente::find($id),
            'datos_personales' => Datos_Personales::find($id)
        ];
        return view('paginas.docentes.edit', [
            'docentes' => $docentes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validacion_request_datos_personales($id);
        $this->validacion_request_docentes();

        $datos_personales = $this->datos_personales_save($request, Datos_Personales::find($id));
        $docentes = $this->docentes_save($request, Docente::find($id));
        try {
            $datos_personales->save();
            $docentes->save();
        } catch (\Exception $e) {
            return back()
                ->with( 'status',['message' => 'error:'.$e->getMessage(), 'tipo' => 'error'])
                ->withInput();
        }
        

        return redirect()
            ->route('docentes.index')
            ->with( 'status',['message' =>'exito: se actualizo', 'tipo' => 'exito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos_personales = Datos_Personales::find($id);
        $docentes = Docente::find($id);

        try {
            $docentes->delete();
            $datos_personales->delete();
        } catch (\Exception $e) {
            return back()
                ->with( 'status',['message' => 'error:'.$e->getMessage(), 'tipo' => 'error'])
                ->withInput();
        }
        return redirect()
            ->route('docentes.index')
            ->with( 'status',['message' =>'exito: se elimino', 'tipo' => 'exito']);
    }
}
