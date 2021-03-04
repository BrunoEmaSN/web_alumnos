<fieldset>
    <legend>Datos Tutor</legend>
    <div class="row">
        <div class="col-md-6">
            <label for="cuil" class="form-label">C.U.I.L.</label>
            <input
                class="form-control"
                type="number"
                name="cuil"
                id="cuil"
                value="{{ old('cuil',$tutores->cuil) }}"
                required
            >
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="telefono_laboral" class="form-label">Telefono Laboral</label>
            <input
                class="form-control"
                type="number"
                name="telefono_laboral"
                id="telefono_laboral"
                value="{{ old('telefono laboral',$tutores->telefono_laboral) }}"
            >
        </div>
        <div class="col-md-6">
            <label for="ocupacion" class="form-label">Ocupacion</label>
            <input
                class="form-control"
                type="text"
                name="ocupacion"
                id="ocupacion"
                value="{{ old('ocupacion',$tutores->ocupacion) }}"
            >
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="nivel_academico" class="form-label">Nivel Academico</label>
            <select
                class="form-select"
                name="nivel_academico"
                id="nivel_academico"
            >
                <option value="N" {{ (old('nivel academico',$tutores->nivel_academico)) ? 'selected' : '' }}>Sin Estudios</option>
                <option value="P" {{ (old('nivel academico',$tutores->nivel_academico)) ? 'selected' : '' }}>Primaria</option>
                <option value="S" {{ (old('nivel academico',$tutores->nivel_academico)) ? 'selected' : '' }}>Secundaria</option>
                <option value="T" {{ (old('nivel academico',$tutores->nivel_academico)) ? 'selected' : '' }}>Terciaria</option>
                <option value="U" {{ (old('nivel academico',$tutores->nivel_academico)) ? 'selected' : '' }}>Universidad</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="profesion" class="form-label">Profesion</label>
            <input
                class="form-control"
                type="text"
                name="profesion"
                id="profesion"
                value="{{ old('profesion',$tutores->profesion)}}"
            >
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="situacion_academica">Situacion Academica</label>
            <div id="situacion_academica">
                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input @error('situacion_academica') is-invalid @enderror"
                        type="radio"
                        name="situacion_academica"
                        id="incompleto"
                        value="I"
                        {{ (old('situacion academica',$tutores->situacion_academica)) ? 'checked' : '' }}
                    >
                    <label class="form-check-label" for="incompleto">Incompleto</label>
                </div>
                <div class="form-check form-check-inline">
                    <input
                        class="form-check-input @error('situacion_academica') is-invalid @enderror"
                        type="radio"
                        name="situacion_academica"
                        id="completo"
                        value="C"
                        {{ (old('situacion academica',$tutores->situacion_academica)) ? 'checked' : '' }}
                    >
                    <label class="form-check-label" for="completo">Completo</label>
                </div>
                @error('situacion_academica')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="pareja" class="form-label">Tiene Pareja?</label>
            <div id="pareja" class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="tiene_pareja"
                    id="tiene_pareja"
                    {{ (old('tiene pareja',$tutores->tiene_pareja)) ? 'checked' : '' }}
                >
                <label for="tiene_pareja" class="form-check-label">Si</label>
            </div>
        </div>
    </div>
</fieldset>