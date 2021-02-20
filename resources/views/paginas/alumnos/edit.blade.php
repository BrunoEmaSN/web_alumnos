@extends('layout')

@section('title', 'Alumnos')

@section('contenido')
<form action="">
    @csrf
    <div>
        <input type="date" name="fecha_nacimiento" placeholder="Fecha Nacimiento">
    </div>
    <div>
        <input type="text" name="nivel" placeholder="Nivel">
    </div>
    <div>
        <input type="number" name="grado_ano" placeholder="Grado/Año">
    </div>
    <div>
        <input type="text" name="turno" placeholder="Turno">
    </div>
    <div>
        <input type="text" name="fecha_nacimiento" placeholder="Fecha Nacimiento">
    </div>
    <div>
        <input type="text" name="lugar_nacimiento" placeholder="Lugar Nacimiento">
    </div>
    <div>
        <input type="text" name="nacionalidad" placeholder="Nacionalidad">
    </div>
    <div>
        <input type="text" name="sexo" placeholder="Sexo">
    </div>
    <div>
        <input type="text" name="alumnos_observaciones" placeholder="Observaciones">
    </div>
    
    @include('componentes._form',['btn' => 'Actualizar'])

</form>

<a href="{{ route('alumnos.index') }}">Volver</a>

@endsection