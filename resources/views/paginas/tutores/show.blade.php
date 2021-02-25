@extends('layout')

@section('title', 'Tutores')

@section('contenido')

<div>
    <h1>Tutor: <strong>{{ $datos_personales->nombre.' '.$datos_personales->apellido }}</strong></h1>
    <div>
        <label for="dni">D.N.I.:</label>
        <p id="dni">{{ $datos_personales->id_dp }}</p>
    </div>
    <div>
        <label for="fecha_nacimiento">Fecha Nacimiento:</label>
        <p id="fecha_nacimiento">{{ $datos_personales->fecha_nacimiento }}</p>
    </div>
    <div>
        <label for="lugar_nacimiento">Lugar Nacimiento:</label>
        <p id="lugar_nacimiento">{{ $datos_personales->lugar_nacimiento }}</p>
    </div>
    <div>
        <label for="nacionalidad">Nacionalidad:</label>
        <p id="nacionalidad">{{ $datos_personales->nacionalidad }}</p>
    </div>
    <div>
        <label for="domicilio">Domicilio:</label>
        <p id="domicilio">{{ $datos_personales->domicilio }}</p>
    </div>
    <div>
        <label for="numero">Numero:</label>
        <p id="numero">{{ $datos_personales->numero }}</p>
    </div>
    <div>
        <label for="piso">Piso:</label>
        <p id="piso">{{ $datos_personales->piso }}</p>
    </div>
    <div>
        <label for="departamento">Departamento:</label>
        <p id="departamento">{{ $datos_personales->departamento }}</p>
    </div>
    <div>
        <label for="telefono_fijo">Telefono Fijo:</label>
        <p id="telefono_fijo">{{ $datos_personales->telefono_fijo }}</p>
    </div>
    <div>
        <label for="telefono_movil">Telefono Movil:</label>
        <p id="telefono_movil">{{ $datos_personales->telefono_movil }}</p>
    </div>
</div>

<a href="{{ route('tutores.index') }}">Volver</a>

@endsection