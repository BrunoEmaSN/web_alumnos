<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Alumno;

use App\Datos_Personales;

use App\Requisitos_Alumnos;

class Alumnos_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        $datos_personales->id_dp = $request->documento;
        $datos_personales->tipo_documento = $request->tipo_documento;
        $datos_personales->nombre = $request->nombre;
        $datos_personales->apellido = $request->apellido;
        $datos_personales->fecha_nacimiento = $request->fecha_nacimiento;
        $datos_personales->sexo = $request->sexo;
        $datos_personales->estado_civil = $request->estado_civil;
        $datos_personales->nacionalidad = $request->nacionalidad;
        $datos_personales->telefono_fijo = $request->telefono_fijo;
        $datos_personales->telefono_movil = $request->telefono_movil;
        $datos_personales->domicilio = $request->domicilio;
        $datos_personales->numero = $request->numero;
        $datos_personales->departamento = $request->departamento;
        $datos_personales->piso = $request->piso;

        $alumnos->id_a = $request->documento;
        $alumnos->fecha_agregado = $request->fecha_agregado;
        $alumnos->nivel = $request->nivel;
        $alumnos->turno = $request->turno;
        $alumnos->tipo_estado = $request->estado;
        $alumnos->grado_ano = $request->grado_ano;
        $alumnos->division = $request->division;
        $alumnos->lugar_nacimiento = $request->lugar_nacimiento;
        $alumnos->alumno_observaciones = $request->alumno_observaciones;

        $requisitos_alumnos->id_ra = $request->documento;
        $requisitos_alumnos->partida_nacimiento = ($request->partida_nacimiento == 'on')?1:0;
        $requisitos_alumnos->dni = ($request->dni == 'on')?1:0;
        $requisitos_alumnos->cuil = ($request->cuil == 'on')?1:0;
        $requisitos_alumnos->foto_4x4 = ($request->foto_4x4 == 'on')?1:0;
        $requisitos_alumnos->contrato = ($request->contrato == 'on')?1:0;

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
        
        $datos_personales->tipo_documento = $request->tipo_documento;
        $datos_personales->nombre = $request->nombre;
        $datos_personales->apellido = $request->apellido;
        $datos_personales->fecha_nacimiento = $request->fecha_nacimiento;
        $datos_personales->sexo = $request->sexo;
        $datos_personales->estado_civil = $request->estado_civil;
        $datos_personales->nacionalidad = $request->nacionalidad;
        $datos_personales->telefono_fijo = $request->telefono_fijo;
        $datos_personales->telefono_movil = $request->telefono_movil;
        $datos_personales->domicilio = $request->domicilio;
        $datos_personales->numero = $request->numero;
        $datos_personales->departamento = $request->departamento;
        $datos_personales->piso = $request->piso;

        $alumnos->fecha_agregado = $request->fecha_agregado;
        $alumnos->nivel = $request->nivel;
        $alumnos->turno = $request->turno;
        $alumnos->tipo_estado = $request->estado;
        $alumnos->grado_ano = $request->grado_ano;
        $alumnos->division = $request->division;
        $alumnos->lugar_nacimiento = $request->lugar_nacimiento;
        $alumnos->alumno_observaciones = $request->alumno_observaciones;

        $requisitos_alumnos->partida_nacimiento = ($request->partida_nacimiento == 'on')?1:0;
        $requisitos_alumnos->dni = ($request->dni == 'on')?1:0;
        $requisitos_alumnos->cuil = ($request->cuil == 'on')?1:0;
        $requisitos_alumnos->foto_4x4 = ($request->foto_4x4 == 'on')?1:0;
        $requisitos_alumnos->contrato = ($request->contrato == 'on')?1:0;

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
