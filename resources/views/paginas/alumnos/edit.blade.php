@extends('layout')

@section('title', 'Alumnos')

@section('contenido')
<form method="POST" action="{{ route('alumnos.update', $alumnos['datos_personales']->id_dp) }}">
    @csrf
    @method('PATCH')

    @include('paginas.alumnos.partes._form', ['alumnos' => $alumnos])

    <button>Actualizar</button>

</form>

<a href="{{ route('alumnos.index') }}">Volver</a>

@endsection