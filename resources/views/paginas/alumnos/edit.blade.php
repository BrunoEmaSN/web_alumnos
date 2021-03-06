@extends('layout')

@section('title', 'Alumnos')

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-10 mx-auto">
            <form
                class="needs-validation bg-light shadow rounded py-3 px-4"
                method="POST"
                action="{{ route('alumnos.update', $alumnos['datos_personales']->id_dp) }}"
                novalidate
            >
                <h1 class="display-4">Editar Alumno</h1>
                @csrf
                @method('PATCH')

                @include('paginas.alumnos.partes._form', ['alumnos' => $alumnos])

                
                @include('paginas.alumnos.partes._datos_parentesco', [
                    'alumnos' => $alumnos,
                    'tutores_alumnos' => $tutores_alumnos
                ])
                
                <hr>

                <div class="row justify-content-md-between">
                    <div class="d-grid gap-2 col-2">
                        <a class="btn btn-outline-primary btn-block" role="button" href="{{ route('alumnos.index') }}">Volver</a>
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
@include('paginas.alumnos.partes._modal_buscar_tutores')
@include('paginas.alumnos.partes._agregar_tutor_alumno')
@include('componentes._notificaciones_toastr')
@endsection