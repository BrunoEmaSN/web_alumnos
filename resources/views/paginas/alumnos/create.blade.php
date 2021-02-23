@extends('layout')

@section('title', 'Alumnos')

@section('contenido')

<form method="POST" action="{{ route('alumnos.store') }}">
    @csrf

    @include('paginas.alumnos.partes._form', ['alumnos' => $alumnos])

    <button>Guardar</button>

</form>

<a href="{{ route('alumnos.index') }}">Volver</a>

@endsection