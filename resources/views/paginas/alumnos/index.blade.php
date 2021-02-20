@extends('layout')

@section('title', 'Alumnos')

@section('contenido')
    <h1>Alumnos</h1>

    <a href="{{ route('alumnos.create') }}">Agregar Alumno</a>
    <a href="{{ route('alumnos.edit', 'alumno') }}">Editar Alumno</a>

    <table id="alumnos" class="table" style="width:100%">
        <thead>
            <tr>
                <th>
                    Agregado
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Apellido
                </th>
                <th>
                    Documento
                </th>
                <th>
                    Estado
                </th>
                <th>
                    Faltantes
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <script>
        $(document).ready( function () {
            $('#alumnos').DataTable();
        } );
    </script>
@endsection