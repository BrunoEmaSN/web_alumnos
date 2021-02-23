@extends('layout')

@section('title', 'Docentes')

@section('contenido')

<form method="POST" action="{{ route('docentes.store') }}">
    @csrf

    @include('paginas.docentes.partes._form', ['docentes' => $docentes])

    <button>Guardar</button>

</form>

<a href="{{ route('docentes.index') }}">Volver</a>

@endsection