@extends('layout')

@section('title', 'Tutores')

@section('contenido')
    <h1>Tutores</h1>

    <table id="tutores" class="table" style="width:100%">
        <thead>
            <tr>
                <th>
                    Id
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
                    Parentesco
                </th>
                <th>
                    es Tutor
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
            $('#tutores').DataTable();
        } );
    </script>
@endsection