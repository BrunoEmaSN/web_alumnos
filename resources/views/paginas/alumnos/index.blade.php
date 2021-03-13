@extends('layout')

@section('title', 'Alumnos')

@section('contenido')
    <div class="container">
        <h1>Alumnos</h1>
        <a class="btn btn-success" href="{{ route('alumnos.create') }}">Agregar Alumno</a>

        <table id="alumnos" class="table" style="width:100%">
            <thead>
                <tr>
                    <th data-id="agregado">Agregado</th>
                    <th data-id="nombre">Nombre</th>
                    <th data-id="apellido">Apellido </th>
                    <th data-id="documento">Documento</th>
                    <th data-id="estado"> Estado</th>
                    <th data-id="faltantes">Faltantes</th>
                    <th data-id="opciones"> Opciones</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <script src="{{ asset('js/_datatable_translate.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#alumnos').DataTable({
                processing: true,
                serverSide: true,
                scrollX: true,
                language: language,
                ajax: "{{ url('api/alumnos') }}",
                columns:[
                    {data: 'agregado'},
                    {data: 'nombre'},
                    {data: 'apellido'},
                    {data: 'documento'},
                    {data: 'estado'},
                    {data: 'faltantes'},
                    {data: 'opciones'}
                ]
            });
        });
    </script>
    @include('componentes._notificaciones_toastr')
@endsection