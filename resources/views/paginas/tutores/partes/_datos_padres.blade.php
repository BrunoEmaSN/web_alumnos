<fieldset>
    <legend>Datos Padres</legend>
    <div>
        <label for="cuil">C.U.I.L.</label>
        <input
            type="number"
            name="cuil"
            id="cuil"
            value="{{ old('cuil',$padres->cuil) }}"
        >
    </div>
    <div>
        <label for="nivel_academico">Nivel Academico</label>
        <select
            name="nivel_academico"
            id="nivel_academico"
        >
            <option value="N" {{ (old('nivel academico',$padres->nivel_academico)) ? 'selected' : '' }}>Sin Estudios</option>
            <option value="P" {{ (old('nivel academico',$padres->nivel_academico)) ? 'selected' : '' }}>Primaria</option>
            <option value="S" {{ (old('nivel academico',$padres->nivel_academico)) ? 'selected' : '' }}>Secundaria</option>
            <option value="T" {{ (old('nivel academico',$padres->nivel_academico)) ? 'selected' : '' }}>Terciaria</option>
            <option value="U" {{ (old('nivel academico',$padres->nivel_academico)) ? 'selected' : '' }}>Universidad</option>
        </select>
        <div>
            <label for="situacion_academica">Situacion Academica</label>
            <input
                type="radio"
                name="situacion_academica"
                value="I"
                {{ (old('situacion academica',$padres->situacion_academica)) ? 'checked' : '' }}
            >Incompleto
            <input
                type="radio"
                name="situacion_academica"
                value="C"
                {{ (old('situacion academica',$padres->situacion_academica)) ? 'checked' : '' }}
            >Completo
        </div>
    </div>
    <div>
        <label for="profesion">Profesion</label>
        <input
            type="text"
            name="profesion"
            id="profesion"
            value="{{ old('profesion',$padres->profesion)}}"
        >
    </div>
</fieldset>