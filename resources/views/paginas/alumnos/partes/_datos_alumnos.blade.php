<fieldset>
    <legend>Datos Academicos</legend>
    <div class="row">
        <div class="col-md-4">
            <label for="nivel" class="form-label">Nivel</label>
            <select class="form-control" name="nivel" id="nivel">
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
        <div class="col-md-2">
            <label for="grado_ano" class="form-label">Grado/Año</label>
            <input
                class="form-control"
                type="number" 
                name="grado_ano"
                id="grado_ano"
                placeholder="grado/año"
                value="{{ old('grado año', $alumnos->grado_ano) }}"
                required
                min="1"
                max="9"
            >
            @error('grado_ano')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="division" class="form-label">Division</label>
            <input
                class="form-control"
                type="text"
                name="division"
                placeholder="division"
                value="{{ old('division', $alumnos->division) }}"
                required
                maxlength="1"
            >
            @error('division')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="turno" class="form-label">Turno</label>
            <select class="form-control" name="turno" id="turno">
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
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="alumno_observaciones" class="form-label">Observaciones</label>
            <textarea
                class="form-control"
                name="alumno_observaciones"
                id="alumno_observaciones"
                rows="3"
            >{{ $alumnos->alumno_observaciones }}</textarea>
        </div>
        <div class="col-md-4">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-control" name="estado" id="estado">
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
    </div>
</fieldset>