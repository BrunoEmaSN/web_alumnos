<fieldset>
    <legend>Datos Parientes</legend>
    <div class="col-md-6">
        <label for="tipo_tutor" class="form-label">Tipo Tutor</label>
        <select class="form-control" name="tipo_tutor" id="tipo_tutor">
            <option
                value="P"
                {{ (old('tipo tutor',$tutores->tipo_tutor) == 'P') ? 'selected' : '' }}
            >
                Padre
            </option>
            <option
                value="M"
                {{ (old('tipo tutor',$tutores->tipo_tutor) == 'M') ? 'selected' : '' }}
            >
                Madre
            </option>
            <option
                value="O"
                {{ (old('tipo tutor',$tutores->tipo_tutor) == 'O' ||
                (old('tipo tutor',$tutores->tipo_tutor) == '')) ? 'selected' : '' }}
            >
                Otros
            </option>
        </select>
        <div>
            <label for="relacion_parentesco" class="form-label">Parentesco</label>
            <input
                class="form-control"
                type="text"
                name="relacion_parentesco"
                id="relacion_parentesco"
                value="{{ old('relacion parentesco',$tutores->relacion_parentesco) }}"
            >
        </div>
    </div>
</fieldset>