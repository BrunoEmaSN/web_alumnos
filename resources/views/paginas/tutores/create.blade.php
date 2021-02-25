@extends('layout')

@section('title', 'Tutores')

@section('contenido')

<form method="POST" action="{{ route('tutores.store') }}">
    @csrf

    @include('paginas.tutores.partes._form', ['tutores' => $tutores])

    <button>Guardar</button>

</form>

<a href="{{ route('tutores.index') }}">Volver</a>

@endsection