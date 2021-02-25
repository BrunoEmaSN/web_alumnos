<fieldset>
    <legend>Datos Tutor</legend>
    <div>
        <label for="tipo_tutor">Tipo Tutor</label>
        <select name="tipo_tutor" id="tipo_tutor">
            <option value="P" {{ (old('tipo tutor',$tutores->tipo_tutor) == 'P') ? 'selected' : '' }}>Padre</option>
            <option value="M" {{ (old('tipo tutor',$tutores->tipo_tutor) == 'M') ? 'selected' : '' }}>Madre</option>
            <option value="O" {{ (old('tipo tutor',$tutores->tipo_tutor) == 'O') ? 'selected' : '' }}>Otros</option>
        </select>
        <div>
            <label for="relacion_parentesco">Parentesco</label>
            <input
                type="text"
                name="relacion_parentesco"
                id="relacion_parentesco"
                value="{{ old('relacion parentesco',$tutores->relacion_parentesco) }}"
            >
        </div>
    </div>
    <div>
        <label for="telefono_laboral">Telefono Laboral</label>
        <input
            type="number"
            name="telefono_laboral"
            id="telefono_laboral"
            value="{{ old('telefono laboral',$tutores->telefono_laboral) }}"
        >
    </div>
    <div>
        <label for="ocupacion">Ocupacion</label>
        <input
            type="text"
            name="ocupacion"
            id="ocupacion"
            value="{{ old('ocupacion',$tutores->ocupacion) }}"
        >
    </div>
    <div>
        <label for="tiene_pareja">Tiene Pareja?</label>
        <input
            type="checkbox"
            name="tiene_pareja"
            id="tiene_pareja"
            {{ (old('tiene pareja',$tutores->tiene_pareja)) ? 'checked' : '' }}
        >Si
    </div>
</fieldset>