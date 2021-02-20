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
        return view('paginas.alumnos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paginas.alumnos.create');
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

        $alumnos->id_a = $request->documento;
        $alumnos->fecha_agregado = $request->fecha_agregado;
        $alumnos->nivel = $request->nivel;
        $alumnos->turno = $request->turno;
        $alumnos->grado_ano = $request->grado_ano;
        $alumnos->division = $request->division;
        $alumnos->tipo_estado = $request->tipo_estado;
        $alumnos->lugar_nacimiento = $request->lugar_nacimiento;
        $alumnos->alumno_observaciones = $request->alumno_observaciones;

        $requisitos_alumnos->id_ra = $request->documento;
        $requisitos_alumnos->partida_nacimiento = $request->partida_nacimiento;
        $requisitos_alumnos->dni = $request->dni;
        $requisitos_alumnos->cuil = $request->cuil;
        $requisitos_alumnos->foto_4x4 = $request->foto_4x4;
        $requisitos_alumnos->contrato = $request->contrato;

        $datos_personales->save();
        $alumnos->save();
        $requisitos_alumnos->save();

        return view('paginas.alumnos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('paginas.alumnos.edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
