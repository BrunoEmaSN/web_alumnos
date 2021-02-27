@extends('layout')

@section('title', 'Docentes')

@section('contenido')
    <div class="container">
        <h1>Docentes</h1>
        <a class="btn btn-success" href="{{ route('docentes.create') }}">Agregar Docentes</a>
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
                @foreach ($docentes as $d)
                <tr>
                    <td>{{ $d->cuit }}</td>
                    <td>{{ $d->nombre }}</td>
                    <td>{{ $d->apellido }}</td>
                    <td>{{ $d->titulo }}</td>
                    <td>
                        <div>{{ ($d->subencionado) ? '- Subencionado' : '' }}</div>
                        <div>{{ ($d->contratado) ? '- Contratado' : '' }}</div>
                        <div>{{ ($d->monotributista) ? '- Monotributista' : '' }}</div>
                    </td>
                    <td>
                        <button><a href="{{ route('docentes.show', $d->documento) }}">Ver</a></button>
                        <button><a href="{{ route('docentes.edit', $d->documento) }}">Editar</a></button>
                        <form action="{{ route('docentes.destroy', $d->documento) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready( function () {
            $('#docentes').DataTable();
        } );
    </script>
@endsection