@extends('layout')

@section('title', 'Tutores')

@section('contenido')

<form method="POST" action="{{ route('tutores.update', $tutores['datos_personales']->id_dp) }}">
    @csrf
    @method('PATCH')

    @include('paginas.tutores.partes._form', ['tutores' => $tutores])

    <button>Actualizar</button>

</form>

<a href="{{ route('tutores.index') }}">Volver</a>

@endsection