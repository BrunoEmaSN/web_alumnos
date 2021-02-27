@extends('layout')

@section('title', 'Tutores')

@section('contenido')
    <div class="container">
        <h1>Tutores</h1>
        <a class="btn btn-success" href="{{ route('tutores.create') }}">Agregar Tutor</a>
        <table id="tutores" class="table" style="width:100%">
            <thead>
                <tr>
                    <th>
                        Documento
                    </th>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Apellido
                    </th>
                    <th>
                        Contacto
                    </th>
                    <th>
                        Opciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tutores as $t)
                    <td>{{ $t->tipo_documento.':'.$t->documento }}</td>
                    <td>{{ $t->nombre }}</td>
                    <td>{{ $t->apellido }}</td>
                    <td>
                        <div>{{ (!is_null($t->telefono_laboral)) ? 'telefono laboral:'.$t->telefono_laboral : '' }}</div>
                        <div>{{ (!is_null($t->telefono_fijo)) ? 'telefono fijo:'.$t->telefono_fijo : '' }}</div>
                        <div>{{ (!is_null($t->telefono_movil)) ? 'telefono movil:'.$t->telefono_movil : '' }}</div>
                    </td>
                    <td>
                        <button><a href="{{ route('tutores.show', $t->documento) }}">Ver</a></button>
                        <button><a href="{{ route('tutores.edit', $t->documento) }}">Editar</a></button>
                        <form action="{{ route('tutores.destroy', $t->documento) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Eliminar</button>
                        </form>
                    </td>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready( function () {
            $('#tutores').DataTable();
        } );
    </script>
@endsection