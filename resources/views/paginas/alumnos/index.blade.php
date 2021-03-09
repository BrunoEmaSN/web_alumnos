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
                        <a 
                            type="button"
                            class="btn btn-outline-info"
                            href="{{ route('alumnos.show', $a->documento) }}"
                            title="ver"
                        >
                            <i class="far fa-eye"></i>
                        </a>
                        <a
                            type="button"
                            class="btn btn-outline-warning"
                            href="{{ route('alumnos.edit', $a->documento) }}"
                            title="editar"
                        >
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('alumnos.destroy', $a->documento) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-outline-danger" title="eliminar">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/_datatable_translate.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#alumnos').DataTable({
                scrollX: true,
                language: language
            });
        });
    </script>
    @include('componentes._notificaciones_toastr')
@endsection