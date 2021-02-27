@extends('layout')

@section('title', 'Alumnos')

@section('contenido')

<div class="container">
    <form method="POST" action="{{ route('alumnos.store') }}">
        @csrf
        
        @include('paginas.alumnos.partes._form', ['alumnos' => $alumnos])

        @include('paginas.alumnos.partes._datos_parentesco', [
            'alumnos' => $alumnos,
            'tutores_alumnos' => $tutores_alumnos
        ])

        <div class="d-grid gap-2 col-6">
            <button class="btn btn-success btn-block" type="submit">Guardar</button>
        </div>
    
    </form>
    <div class="d-grid gap-2 col-6">
        <a class="btn btn-outline-primary btn-block" role="button" href="{{ route('alumnos.index') }}">Volver</a>
    </div>
</div>
@include('paginas.alumnos.partes._modal_buscar_tutores')
@include('paginas.alumnos.partes._agregar_tutor_alumno')
@endsection