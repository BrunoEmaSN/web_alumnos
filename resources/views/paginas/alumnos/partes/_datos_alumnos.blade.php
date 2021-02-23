<fieldset>
    <legend>Datos Academicos</legend>
    <div>
        <label for="nivel">Nivel</label>
        <select name="nivel" id="nivel">
            <option value="3" {{ ($alumnos->nivel == '3') ? 'selected' : '' }}>
                Salita 3
            </option>
            <option value="4" {{ ($alumnos->nivel == '4') ? 'selected' : '' }}>
                Salita 4
            </option>
            <option value="5" {{ ($alumnos->nivel == '5') ? 'selected' : '' }}>
                Salita 5
            </option>
            <option value="P" {{ ($alumnos->nivel == 'P') ? 'selected' : '' }}>
                Primaria
            </option>
            <option value="S" {{ ($alumnos->nivel == 'S') ? 'selected' : '' }}>
                Secundaria
            </option>
            <option value="T" {{ ($alumnos->nivel == 'T') ? 'selected' : '' }}>
                Terciaria
            </option>
            <option value="U" {{ ($alumnos->nivel == 'U') ? 'selected' : '' }}>
                Universidad
            </option>
        </select>
    </div>
    <div>
        <label for="grado_ano">Grado/Año</label>
        <input
            type="number" 
            name="grado_ano"
            id="grado_ano"
            placeholder="grado/año"
            value="{{ old('grado año', $alumnos->grado_ano) }}"
        >
    </div>
    <div>
        <label for="division">Division</label>
        <input
            type="text"
            name="division"
            placeholder="division"
            value="{{ old('division', $alumnos->division) }}"
        >
    </div>
    <div>
        <label for="turno">Turno</label>
        <select name="turno" id="turno">
            <option value="M" {{ ($alumnos->turno == 'M') ? 'selected' : '' }}>
                Mañana
            </option>
            <option value="T" {{ ($alumnos->turno == 'T') ? 'selected' : '' }}>
                Tarde
            </option>
            <option value="N" {{ ($alumnos->turno == 'N') ? 'selected' : '' }}>
                Noche
            </option>
        </select>
    </div>
    <div>
        <label for="estado">Estado</label>
        <select name="estado" id="estado">
            <option value="I" {{ ($alumnos->tipo_estado == 'I') ? 'selected' : '' }}>
                Inscripto
            </option>
            <option value="N" {{ ($alumnos->tipo_estado == 'N') ? 'selected' : '' }}>
                No Inscripto
            </option>
            <option value="B" {{ ($alumnos->tipo_estado == 'B') ? 'selected' : '' }}>
                Baja
            </option>
        </select>
    </div>
    <div>
        <label for="alumno_observaciones">Observaciones</label>
        <textarea
            name="alumno_observaciones"
            id="alumno_observaciones"
            rows="3"
        >{{ $alumnos->alumno_observaciones }}</textarea>
    </div>
</fieldset>