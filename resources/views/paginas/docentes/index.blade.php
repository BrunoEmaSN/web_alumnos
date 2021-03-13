@extends('layout')

@section('title', 'Docentes')

@section('contenido')
    <div class="container">
        <h1>Docentes</h1>
        <a class="btn btn-success" href="{{ route('docentes.create') }}">Agregar Docentes</a>
        <table id="docentes" class="table" style="width:100%">
            <thead>
                <tr>
                    <th data-id="cuit">C.U.I.T.</th>
                    <th data-id="nombre">Nombre</th>
                    <th data-id="apellido">Apellido</th>
                    <th data-id="titulo">Titulo</th>
                    <th data-id="contrato">Contrato</th>
                    <th data-id="opciones">Opciones</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <script src="{{ asset('js/_datatable_translate.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#docentes').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                language: language,
                ajax: "{{ url('api/docentes') }}",
                columns:[
                    {data: 'cuit'},
                    {data: 'nombre'},
                    {data: 'apellido'},
                    {data: 'titulo'},
                    {data: 'contrato'},
                    {data: 'opciones'}
                ]
            });
        } );
    </script>
    @include('componentes._notificaciones_toastr')
@endsection