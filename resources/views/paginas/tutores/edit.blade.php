@extends('layout')

@section('title', 'Tutores')

@section('contenido')
<div class="container">
    <form method="POST" action="{{ route('tutores.update', $tutores['datos_personales']->id_dp) }}">
        @csrf
        @method('PATCH')

        @include('paginas.tutores.partes._form', ['tutores' => $tutores])

        <hr>

        <div class="row justify-content-md-between">
            <div class="d-grid gap-2 col-2">
                <a class="btn btn-outline-primary btn-block" role="button" href="{{ route('tutores.index') }}">Volver</a>
            </div>
            <div class="d-grid gap-2 col-2">
            
            <button class="btn btn-success btn-block" type="submit">Actualizar</button>
            </div>
        </div>
    </form>
</div>
@endsection