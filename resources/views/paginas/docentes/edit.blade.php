@extends('layout')

@section('title', 'Docentes')

@section('contenido')
<div class="container">
    <form method="POST" action="{{ route('docentes.update', $docentes['datos_personales']->id_dp) }}">
        @csrf
        @method('PATCH')

        @include('paginas.docentes.partes._form', ['docentes' => $docentes])

        <div class="d-grid gap-2 col-6">
            <button class="btn btn-success btn-block" type="submit">Actualizar</button>
        </div>

    </form>

    <div class="d-grid gap-2 col-6">
        <a class="btn btn-outline-primary btn-block" role="button" href="{{ route('docentes.index') }}">Volver</a>
    </div>
</div>
@endsection