@extends('layout')

@section('title', 'Docentes')

@section('contenido')

<form method="POST" action="{{ route('docentes.update', $docentes['datos_personales']->id_dp) }}">
    @csrf
    @method('PATCH')

    @include('paginas.docentes.partes._form', ['docentes' => $docentes])

    <button>Actualizar</button>

</form>

<a href="{{ route('docentes.index') }}">Volver</a>

@endsection