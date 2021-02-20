@extends('layout')

@section('title', 'Alumnos')

@section('contenido')

<form method="POST" action="{{ route('alumnos.store') }}">
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
    
    @include('componentes._form',['btn' => 'Guardar'])

    <div>
        <label for="partida_nacimiento">Partida Nacimiento</label>
        <input type="checkbox" name="partida_nacimiento">
        <label for="dni">D.N.I.</label>
        <input type="checkbox" name="dni">
        <label for="cuil">C.U.I.L.</label>
        <input type="checkbox" name="cuil">
        <label for="foto_4x4">Foto 4 x 4</label>
        <input type="checkbox" name="foto_4x4">
        <label for="contrato">Contrato</label>
        <input type="checkbox" name="contrato">
    </div>
</form>

<a href="{{ route('alumnos.index') }}">Volver</a>

@endsection