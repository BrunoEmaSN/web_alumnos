<div>
    <input
        type="text"
        name="nivel"
        placeholder="nivel"
        value="{{ old('nivel', $alumnos->nivel) }}"
    >
</div>
<div>
    <input
        type="text"
        name="division"
        placeholder="division"
        value="{{ old('division', $alumnos->division) }}"
    >
</div>
<div>
    <input
        type="number" 
        name="grado_ano"
        placeholder="grado/año"
        value="{{ old('grado año', $alumnos->grado_ano) }}"
    >
</div>
<div>
    <input
        type="text"
        name="turno"
        placeholder="turno"
        value="{{ old('turno', $alumnos->turno) }}"
    >
</div>
<div>
    <input
        type="text"
        name="estado"
        placeholder="estado"
        value="{{ old('estado', $alumnos->tipo_estado) }}"
    >
</div>
<div>
    <input
        type="text"
        name="lugar_nacimiento"
        placeholder="lugar nacimiento"
        value="{{ old('lugar nacimiento', $alumnos->lugar_nacimiento) }}"
    >
</div>
<div>
    <input
        type="text"
        name="alumno_observaciones"
        placeholder="observaciones"
        value="{{ old('observaciones', $alumnos->alumno_observaciones) }}"
    >
</div>