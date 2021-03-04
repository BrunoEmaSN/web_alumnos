@extends('layout')

@section('title', 'Tutores')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-10 mx-auto">
            <form
                class="needs-validation bg-light shadow rounded py-3 px-4"
                method="POST"
                action="{{ route('tutores.store') }}"
                novalidate
            >
                <h1 class="display-4">Nuevo Tutor</h1>
                @csrf

                @include('paginas.tutores.partes._form', ['tutores' => $tutores])

                <hr>

                <div class="row justify-content-md-between">
                    <div class="d-grid gap-2 col-2">
                        <a class="btn btn-outline-primary btn-block" role="button" href="{{ route('tutores.index') }}">Volver</a>
                    </div>
                    <div class="d-grid gap-2 col-2">
                    
                    <button class="btn btn-success btn-block" type="submit">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection