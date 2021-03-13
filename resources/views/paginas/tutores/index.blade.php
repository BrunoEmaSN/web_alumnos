@extends('layout')

@section('title', 'Tutores')

@section('contenido')
    <div class="container">
        <h1>Tutores</h1>
        <a class="btn btn-success" href="{{ route('tutores.create') }}">Agregar Tutor</a>
        <table id="tutores" class="table" style="width:100%">
            <thead>
                <tr>
                    <th data-id="documento">Documento</th>
                    <th data-id="nombre">Nombre</th>
                    <th data-id="apellido">Apellido</th>
                    <th data-id="contacto">Contacto</th>
                    <th data-id="opciones">Opciones</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <script src="{{ asset('js/_datatable_translate.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#tutores').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                language: language,
                ajax: "{{ url('api/tutores') }}",
                columns:[
                    {data: 'documento'},
                    {data: 'nombre'},
                    {data: 'apellido'},
                    {data: 'contacto'},
                    {data: 'opciones'}
                ]
            });
        } );
    </script>
    @include('componentes._notificaciones_toastr')
@endsection