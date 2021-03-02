@extends('layout')

@section('title', 'Tutores')

@section('contenido')

<div class="container">
    <h1>Tutor: <strong>{{ $datos_personales->nombre.' '.$datos_personales->apellido }}</strong></h1>
    <dl class="row">
        <dt class="col-sm-1">D.N.I.</dt>
        <dd class="col-sm-11">{{ $datos_personales->id_dp }}</dd>
    </dl>
    <dl class="row">
        <dt class="col-sm-2">Fecha Nacimiento</dt>
        <dd class="col-sm-2">{{ $datos_personales->fecha_nacimiento }}</dd>
        <dt class="col-sm-2">Lugar Nacimiento</dt>
        <dd class="col-sm-2">{{ $datos_personales->lugar_nacimiento }}</dd>
        <dt class="col-sm-2">Nacionalidad</dt>
        <dd class="col-sm-2">{{ $datos_personales->lugar_nacimiento }}</dd>
    </dl>
    <dl class="row">
        <dt class="col-sm-2">Domicilio</dt>
        <dd class="col-sm-2">{{ $datos_personales->domicilio }}</dd>
        <dt class="col-sm-1">Numero</dt>
        <dd class="col-sm-1">{{ $datos_personales->numero }}</dd>
        <dt class="col-sm-1">Piso</dt>
        <dd class="col-sm-1">{{ $datos_personales->piso }}</dd>
        <dt class="col-sm-2">Departamento</dt>
        <dd class="col-sm-2">{{ $datos_personales->departamento }}</dd>
    </dl>
    <dl class="row">
        <dt class="col-sm-2">Telefono Fijo</dt>
        <dd class="col-sm-2">{{ $datos_personales->telefono_fijo }}</dd>
        <dt class="col-sm-2">Telefono Movil</dt>
        <dd class="col-sm-2">{{ $datos_personales->telefono_movil }}</dd>
    </dl>

    <hr>

    <div class="row justify-content-md-start">
        <div class="d-grid gap-2 col-2">
            <a class="btn btn-outline-primary btn-block" role="button" href="{{ route('tutores.index') }}">Volver</a>
        </div>
    </div>
</div>

@endsection