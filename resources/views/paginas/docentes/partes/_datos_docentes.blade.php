<fieldset>
    <legend>Datos del Docente</legend>
    <div class="row">
        <div class="col-md-4">
            <label for="cuit" class="form-label">C.U.I.T.</label>
            <input
                class="form-control @error('cuit') is-invalid @enderror"
                type="number"
                name="cuit"
                id="cuit"
                value="{{ old('cuit', $docentes->cuit) }}"
                required
            >
            @error('cuit')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="titulo" class="form-label">Titulo</label>
            <input
                class="form-control @error('titulo') is-invalid @enderror"
                type="text"
                name="titulo"
                id="titulo"
                value="{{ old('titulo', $docentes->titulo) }}"
                required
            >
            @error('titulo')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="sedes" class="form-label">Sedes</label>
            <input
                class="form-control"
                type="text"
                name="sedes"
                id="sedes"
                vallue="{{ old('sedes', $docentes->sedes) }}"
            >
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="docente_observaciones" class="form-label">Observaciones</label>
            <textarea
                class="form-control"
                name="docente_observaciones"
                id="docente_observaciones"
                rows="3"
            >{{ old('docente_observaciones', $docentes->docente_observaciones) }}</textarea>
        </div>
        <div class="col-md-4">
            <label for="contratos" class="form-check-label">Contratos</label>
            <div id="contratos" class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="subencionado"
                    id="subencionado"
                    {{ (old('subencionado',$docentes->subencionado)) ? 'checked' : '' }}
                >
                <label for="contratos" class="form-check-label">Subencionado</label>
            </div>
            <div id="contratos" class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="contratado"
                    id="contratado"
                    {{ (old('contratado',$docentes->contratado)) ? 'checked' : '' }}
                >
                <label for="contratado" class="form-check-label">Contratado</label>
            </div>
            <div id="contratos" class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="monotributista"
                    id="monotributista"
                    {{ (old('monotributista',$docentes->monotributista)) ? 'checked' : '' }}
                >
                <label for="monotributista" class="form-check-label">Monotributista</label>
            </div>
        </div>
    </div>
</fieldset>