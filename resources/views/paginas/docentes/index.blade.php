@extends('layout')

@section('title', 'Docentes')

@section('contenido')
    <h1>Docentes</h1>

    <table id="docentes" class="table" style="width:100%">
        <thead>
            <tr>
                <th>
                    C.U.I.T.
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Apellido
                </th>
                <th>
                    Titulo
                </th>
                <th>
                    Contrato
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
            $('#docentes').DataTable();
        } );
    </script>
@endsection