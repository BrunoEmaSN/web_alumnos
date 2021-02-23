<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Models
use App\Alumno;
use App\Datos_Personales;
use App\Requisitos_Alumnos;
//Traits
use App\Traits\Datos_Personales_Traits;
use App\Traits\Alumnos_Traits;
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

    public function index()
    {
        $alumnos = Alumno::join('datos_personales AS dp', 'dp.id_dp', '=', 'alumnos.id_a')
            ->join('requisitos_alumnos AS ra', 'ra.id_ra', '=', 'alumnos.id_a')
            ->select(
                'alumnos.fecha_agregado AS agregado',
                'dp.nombre',
                'dp.apellido',
                'alumnos.id_a AS documento',
                'alumnos.tipo_estado AS estado',
                'ra.partida_nacimiento',
                'ra.dni',
                'ra.cuil',
                'ra.foto_4x4',
                'ra.contrato'
            )
            ->get();
        return view('paginas.alumnos.index', [
            'alumnos' => $alumnos
        ]);
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
        return view('paginas.alumnos.create', [
            'alumnos' => $alumnos
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
        $datos_personales = new Datos_Personales;
        $alumnos = new Alumno;
        $requisitos_alumnos = new Requisitos_Alumnos;

        $datos_personales = $this->datos_personales_save($request, $datos_personales);
        $alumnos = $this->alumnos_save($request, $alumnos);
        $requisitos_alumnos = $this->requisitos_alumnos_save($request, $requisitos_alumnos);

        $datos_personales->save();
        $alumnos->save();
        $requisitos_alumnos->save();

        return Alumnos_Controller::index();
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
        return view('paginas.alumnos.edit', [
            'alumnos' => $alumnos
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
        $alumnos = Alumno::find($id);
        $datos_personales = Datos_Personales::find($id);
        $requisitos_alumnos = Requisitos_Alumnos::find($id);
        
        $datos_personales = $this->datos_personales_save($request, $datos_personales);
        $alumnos = $this->alumnos_save($request, $alumnos);
        $requisitos_alumnos = $this->requisitos_alumnos_save($request, $requisitos_alumnos);

        $datos_personales->save();
        $alumnos->save();
        $requisitos_alumnos->save();

        return Alumnos_Controller::index();
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

        $requisitos_alumnos->delete();
        $alumnos->delete();
        $datos_personales->delete();
        
        return Alumnos_Controller::index();
    }
}
