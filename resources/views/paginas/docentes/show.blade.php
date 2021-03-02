@extends('layout')

@section('title', 'Docentes')

@section('contenido')

<div class="container">
    <h1>Docente: <strong>{{ $datos_personales->nombre.' '.$datos_personales->apellido }}</strong></h1>
    <dl class="row">
        <dt class="col-sm-1">C.U.I.T.</dt>
        <dd class="col-sm-2">{{ $docentes->cuit }}</dd>
        <dt class="col-sm-1">Titulo</dt>
        <dd class="col-sm-8">{{ $docentes->titulo }}</dd>
    </dl>
    <dl class="row">
        <dt class="col-sm-1">Contratos</dt>
        <dd class="col-sm-11">
            <div>
                {{ ($docentes->subencionado) ? 'Subencionado' : '' }}
            </div>
            <div>
                {{ ($docentes->contratado) ? 'Contratado' : '' }}
            </div>
            <div>
                {{ ($docentes->monotributista) ? 'Monotributista' : '' }}
            </div>
        </dd>
    </dl>
    <dl class="row">
        <dt class="col-sm-1">Observaciones</dt>
        <dd class="col-sm-11">{{ $docentes->docente_observaciones }}</dd>
    </dl>

    <hr>

    <div class="row justify-content-md-start">
        <div class="d-grid gap-2 col-2">
            <a class="btn btn-outline-primary btn-block" role="button" href="{{ route('docentes.index') }}">Volver</a>
        </div>
    </div>
</div>

@endsection