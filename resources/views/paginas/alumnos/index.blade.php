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
            <tbody>
                @foreach ($alumnos as $a)
                <tr>
                    <td>{{ $a->agregado }}</td>
                    <td>{{ $a->nombre }}</td>
                    <td>{{ $a->apellido }}</td>
                    <td>
                        {{ $a->tipo_documento.':'.$a->documento }}
                    </td>
                    <td>
                        @switch($a->estado)
                            @case('I')
                                Inscripto
                                @break
                            @case('N')
                                No Inscripto
                                @break
                            @case('B')
                                Baja
                                @break
                        @endswitch
                    </td>
                    <td>
                        <div>{{ (!$a->partida_nacimiento) ? '- Partida Nacimiento' : '' }}</div>
                        <div>{{ (!$a->dni) ? '- D.N.I.' : '' }}</div>
                        <div>{{ (!$a->cuil) ? '- C.U.I.L.' : '' }}</div>
                        <div>{{ (!$a->foto_4x4) ? '- Foto 4 x 4' : '' }}</div>
                        <div>{{ (!$a->contrato) ? '- Contrato' : '' }}</div>
                    </td>
                    <td>
                        <button><a href="{{ route('alumnos.show', $a->documento) }}">Ver</a></button>
                        <button><a href="{{ route('alumnos.edit', $a->documento) }}">Editar</a></button>
                        <form action="{{ route('alumnos.destroy', $a->documento) }}" method="POST">
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
            $('#alumnos').DataTable();
        });
    </script>
@endsection