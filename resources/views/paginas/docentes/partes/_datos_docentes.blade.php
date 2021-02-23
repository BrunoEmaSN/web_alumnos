<fieldset>
    <legend>Datos del Docente</legend>
    <div>
        <label for="cuit">C.U.I.T.</label>
        <input
            type="number"
            name="cuit"
            id="cuit"
            value="{{ old('cuit', $docentes->cuit) }}"
        >
    </div>
    <div>
        <label for="titulo">Titulo</label>
        <input
            type="text"
            name="titulo"
            id="titulo"
            value="{{ old('titulo', $docentes->titulo) }}"
        >
    </div>
    <div>
        <label for="contratos">Contratos</label>
        <input
            type="checkbox"
            name="subencionado"
            id="contratos"
            {{ ($docentes->subencionado) ? 'checked' : '' }}
        >Subencionado
        <input
            type="checkbox"
            name="contratado"
            id="contratos"
            {{ ($docentes->contratado) ? 'checked' : '' }}
        >Contratado
        <input
            type="checkbox"
            name="monotributista"
            id="contratos"
            {{ ($docentes->monotributista) ? 'checked' : '' }}
        >Monotributista
    </div>
    <div>
        <label for="sedes">Sedes</label>
        <input
            type="text"
            name="sedes"
            id="sedes"
            vallue="{{ old('sedes', $docentes->sedes) }}"
        >
    </div>
    <div>
        <label for="docente_observaciones">Observaciones</label>
        <textarea
            name="docente_observaciones"
            id="docente_observaciones"
            rows="3"
        >{{ old('docente_observaciones', $docentes->docente_observaciones) }}</textarea>
    </div>
</fieldset>