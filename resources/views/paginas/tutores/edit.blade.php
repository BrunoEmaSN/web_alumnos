@extends('layout')

@section('title', 'Tutores')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-10 mx-auto">
            <form
                class="needs-validation bg-light shadow rounded py-3 px-4"
                method="POST"
                action="{{ route('tutores.update', $tutores['datos_personales']->id_dp) }}"
                novalidate
            >
                <h1 class="display-4">Editar Tutor</h1>
                @csrf
                @method('PATCH')

                @include('paginas.tutores.partes._form', ['tutores' => $tutores])

                <hr>

                <div class="row justify-content-md-between">
                    <div class="d-grid gap-2 col-2">
                        <a class="btn btn-outline-primary btn-block" role="button" href="{{ route('tutores.index') }}">Volver</a>
                    </div>
                    <div class="col-6"></div>
                    <div class="d-grid gap-2 col-2">
                        <button class="btn btn-success btn-block" type="submit">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('componentes._notificaciones_toastr')
@endsection