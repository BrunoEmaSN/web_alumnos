@extends('layout')

@section('title', 'Tutores')

@section('contenido')
<div class="container">
    <form method="POST" action="{{ route('tutores.update', $tutores['datos_personales']->id_dp) }}">
        @csrf
        @method('PATCH')

        @include('paginas.tutores.partes._form', ['tutores' => $tutores])

        <div class="d-grid gap-2 col-6">
            <button class="btn btn-success btn-block" type="submit">Actualizar</button>
        </div>

    </form>
    <div class="d-grid gap-2 col-6">
        <a class="btn btn-outline-primary btn-block" role="button" href="{{ route('tutores.index') }}">Volver</a>
    </div>
</div>
@endsection