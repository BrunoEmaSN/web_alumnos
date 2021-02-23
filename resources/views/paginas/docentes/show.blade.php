@extends('layout')

@section('title', 'Docentes')

@section('contenido')

<div>
    <h1>Docente: <strong>{{ $datos_personales->nombre.' '.$datos_personales->apellido }}</strong></h1>
    <div>
        <label for="cuit">C.U.I.T:</label>
        <p id="cuit">{{ $docentes->cuit }}</p>
    </div>
    <div>
        <label for="contratos">Contratos:</label>
        <p id="contratos">{{ ($docentes->subencionado) ? 'Subencionado' : '' }}</p>
        <p id="contratos">{{ ($docentes->contratado) ? 'Contratado' : '' }}</p>
        <p id="contratos">{{ ($docentes->monotributista) ? 'Monotributista' : '' }}</p>
    </div>
    <div>
        <label for="titulo">Titulo:</label>
        <p id="titulo">{{ $docentes->titulo }}</p>
    </div>
    <div>
        <label for="docente_observaciones">Observaciones:</label>
        <p id="docente_observaciones">{{ $docentes->docente_observaciones }}</p>
    </div>
</div>

<a href="{{ route('docentes.index') }}">Volver</a>

@endsection