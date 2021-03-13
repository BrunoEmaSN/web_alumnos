<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Models
use App\Alumno;
use App\Datos_Personales;
use App\Requisitos_Alumnos;
use App\Tutor_Alumno;
//Traits
use App\Traits\Datos_Personales_Traits;
use App\Traits\Alumnos_Traits;
use App\Traits\Tutores_Alumnos_Traits;
use App\Traits\Requisitos_Alumnos_Traits;

class Alumnos_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Datos_Personales_Traits;

    use Alumnos_Traits;

    use Requisitos_Alumnos_Traits;

    use Tutores_Alumnos_Traits;

    public function index()
    {
        return view('paginas.alumnos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = [
            'datos_alumnos' => new Alumno,
            'datos_personales' => new Datos_Personales,
            'requisitos_alumnos' => new Requisitos_Alumnos
        ];
        $tutores_alumnos = new Tutor_Alumno;
        return view('paginas.alumnos.create', [
            'alumnos' => $alumnos,
            'tutores_alumnos' => $tutores_alumnos
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
        $this->validacion_request_alumnos();

        $datos_personales = $this->datos_personales_save($request, new Datos_Personales);
        $alumnos = $this->alumnos_save($request, new Alumno);
        $alumnos->fecha_agregado = date("Y-m-d");
        $requisitos_alumnos = $this->requisitos_alumnos_save($request, new Requisitos_Alumnos);

        try {
            $datos_personales->save();
            $alumnos->save();
            $requisitos_alumnos->save();

            $this->tutores_alumnos_save($request);

        } catch (\Exception $e) {
            return back()
                ->with( 'status',['message' => 'error:'.$e->getMessage(), 'tipo' => 'error'])
                ->withInput();
        }

        return redirect()
            ->route('alumnos.index')
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
        return view('paginas.alumnos.show', [
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
        $alumnos = [
            'datos_alumnos' => Alumno::find($id),
            'datos_personales' => Datos_Personales::find($id),
            'requisitos_alumnos' => Requisitos_Alumnos::find($id)
        ];
        $tutores_alumnos = Tutor_Alumno::join('datos_personales AS dp', 'dp.id_dp', '=', 'tutores_alumnos.id_t')
        ->select(
            'dp.id_dp AS tutor_documento',
            'dp.nombre',
            'dp.apellido',
            'tutores_alumnos.relacion_parentesco',
            'tutores_alumnos.conviven_con_alumno'
        )
        ->where(
            'id_a', $id
        )
        ->get();
        return view('paginas.alumnos.edit', [
            'alumnos' => $alumnos,
            'tutores_alumnos' => $tutores_alumnos
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
        $this->validacion_request_alumnos();

        $datos_personales = $this->datos_personales_save($request, Datos_Personales::find($id));
        $alumnos = $this->alumnos_save($request, Alumno::find($id));
        $requisitos_alumnos = $this->requisitos_alumnos_save($request, Requisitos_Alumnos::find($id));

        try {
            $requisitos_alumnos->save();
            $alumnos->save();
            $datos_personales->save();

            $this->tutores_alumnos_delete($id);
            $this->tutores_alumnos_save($request);

        } catch (\Exception $e) {
            return back()
                ->with( 'status',['message' =>'error:'.$e->getMessage(), 'tipo' => 'error'])
                ->withInput();
        }

        return redirect()
            ->route('alumnos.index')
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
        $alumnos = Alumno::find($id);
        $requisitos_alumnos = Requisitos_Alumnos::find($id);

        try {
            $this->tutores_alumnos_delete($id);
            $requisitos_alumnos->delete();
            $alumnos->delete();
            $datos_personales->delete();
        } catch (\Exception $e) {
            return back()
                ->with( 'status',['message' =>'error:'.$e->getMessage(), 'tipo' => 'error'])
                ->withInput();
        }
        
        return redirect()
            ->route('alumnos.index')
            ->with( 'status',['message' =>'exito: se elimino', 'tipo' => 'exito']);
    }
}
