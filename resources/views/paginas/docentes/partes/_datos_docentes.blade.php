<fieldset>
    <legend>Datos del Docente</legend>
    <div class="col-md-6">
        <label for="cuit" class="form-label">C.U.I.T.</label>
        <input
            class="form-control"
            type="number"
            name="cuit"
            id="cuit"
            value="{{ old('cuit', $docentes->cuit) }}"
        >
    </div>
    <div class="col-md-6">
        <label for="titulo" class="form-label">Titulo</label>
        <input
            class="form-control"
            type="text"
            name="titulo"
            id="titulo"
            value="{{ old('titulo', $docentes->titulo) }}"
        >
    </div>
    <div class="col-md-6">
        <label for="contratos" class="form-check-label">Contratos</label>
        <div id="contratos" class="form-check">
            <input
                class="form-check-input"
                type="checkbox"
                name="subencionado"
                id="subencionado"
                {{ ($docentes->subencionado) ? 'checked' : '' }}
            >
            <label for="contratos" class="form-check-label">Subencionado</label>
        </div>
        <div id="contratos" class="form-check">
            <input
                class="form-check-input"
                type="checkbox"
                name="contratado"
                id="subencionado"
                {{ ($docentes->contratado) ? 'checked' : '' }}
            >
            <label for="contratado" class="form-check-label">Contratado</label>
        </div>
        <div id="contratos" class="form-check">
            <input
                class="form-check-input"
                type="checkbox"
                name="monotributista"
                id="monotributista"
                {{ ($docentes->monotributista) ? 'checked' : '' }}
            >
            <label for="monotributista" class="form-check-label">Monotributista</label>
        </div>
    </div>
    <div class="col-md-6">
        <label for="sedes" class="form-label">Sedes</label>
        <input
            class="form-control"
            type="text"
            name="sedes"
            id="sedes"
            vallue="{{ old('sedes', $docentes->sedes) }}"
        >
    </div>
    <div class="col-md-6">
        <label for="docente_observaciones" class="form-label">Observaciones</label>
        <textarea
            class="form-control"
            name="docente_observaciones"
            id="docente_observaciones"
            rows="3"
        >{{ old('docente_observaciones', $docentes->docente_observaciones) }}</textarea>
    </div>
</fieldset>