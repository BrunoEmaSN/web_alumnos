<fieldset>
    <legend>Datos Academicos</legend>
    <div class="row">
        <div class="col-md-4">
            <label for="nivel" class="form-label">Nivel<small>(*)</small></label>
            <select class="form-select" name="nivel" id="nivel">
                <option
                    value="3"
                    {{ (old('nivel',$alumnos->nivel) == '3') ? 'selected' : '' }}
                >
                    Salita 3
                </option>
                <option
                    value="4"
                    {{ (old('nivel',$alumnos->nivel) == '4') ? 'selected' : '' }}
                >
                    Salita 4
                </option>
                <option
                    value="5"
                    {{ (old('nivel',$alumnos->nivel) == '5') ? 'selected' : '' }}
                >
                    Salita 5
                </option>
                <option
                    value="P"
                    {{ (old('nivel',$alumnos->nivel) == 'P') ? 'selected' : '' }}
                >
                    Primaria
                </option>
                <option
                    value="S"
                    {{ (old('nivel',$alumnos->nivel) == 'S') ? 'selected' : '' }}
                >
                    Secundaria
                </option>
                <option
                    value="T"
                    {{ (old('nivel',$alumnos->nivel) == 'T') ? 'selected' : '' }}
                >
                    Terciaria
                </option>
                <option
                    value="U"
                    {{ (old('nivel',$alumnos->nivel) == 'U') ? 'selected' : '' }}
                >
                    Universidad
                </option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="grado_ano" class="form-label">Grado/Año<small>(*)</small></label>
            <input
                class="form-control @error('grado_ano') is-invalid @enderror"
                type="number" 
                name="grado_ano"
                id="grado_ano"
                placeholder="grado/año"
                value="{{ old('grado_año', $alumnos->grado_ano) }}"
            >
            @error('grado_ano')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="division" class="form-label">Division<small>(*)</small></label>
            <input
                class="form-control @error('division') is-invalid @enderror"
                type="text"
                name="division"
                placeholder="division"
                value="{{ old('division', $alumnos->division) }}"
            >
            @error('division')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="turno" class="form-label">Turno<small>(*)</small></label>
            <select class="form-select" name="turno" id="turno">
                <option
                    value="M"
                    {{ (old('turno',$alumnos->turno) == 'M') ? 'selected' : '' }}
                >
                    Mañana
                </option>
                <option
                    value="T"
                    {{ (old('turno',$alumnos->turno) == 'T') ? 'selected' : '' }}
                >
                    Tarde
                </option>
                <option
                    value="N"
                    {{ (old('turno',$alumnos->turno) == 'N') ? 'selected' : '' }}
                >
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
            >{{ old('alumno_observaciones',$alumnos->alumno_observaciones) }}</textarea>
        </div>
        <div class="col-md-4">
            <label for="estado" class="form-label">Estado<small>(*)</small></label>
            <select class="form-select" name="estado" id="estado">
                <option value="I" {{ (old('estado',$alumnos->tipo_estado) == 'I') ? 'selected' : '' }}>
                    Inscripto
                </option>
                <option value="N" {{ (old('estado',$alumnos->tipo_estado) == 'N') ? 'selected' : '' }}>
                    No Inscripto
                </option>
                <option value="B" {{ (old('estado',$alumnos->tipo_estado) == 'B') ? 'selected' : '' }}>
                    Baja
                </option>
            </select>
        </div>
    </div>
</fieldset>