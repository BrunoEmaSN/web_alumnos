<fieldset>
    <legend>Requisitos</legend>
    <div class="form-check">
        <label for="partida_nacimiento" class="form-check-label">Partida Nacimiento</label>
        <input
            class="form-check-input"
            type="checkbox"
            name="partida_nacimiento"
            {{ (old('partida_nacimiento',$requisitos->partida_nacimiento)) ? 'checked' : ''}}
        >
    </div>
    <div class="form-check">
        <label for="dni" class="form-check-label">D.N.I.</label>
        <input
            class="form-check-input"
            type="checkbox"
            name="dni"
            {{ (old('dni',$requisitos->dni)) ? 'checked' : '' }}
        >
    </div>
    <div class="form-check">
        <label for="cuil" class="form-check-label">C.U.I.L.</label>
        <input
            class="form-check-input" 
            type="checkbox"
            name="cuil"
            {{ (old('cuil',$requisitos->cuil)) ? 'checked' : '' }}
        >
    </div>
    <div class="form-check">
        <label for="foto_4x4" class="form-check-label">Foto 4 x 4</label>
        <input
            class="form-check-input"
            type="checkbox" 
            name="foto_4x4"
            {{ (old('foto_4x4',$requisitos->foto_4x4)) ? 'checked' : '' }}
        >
    </div>
    <div class="form-check">
        <label for="contrato" class="form-check-label">Contrato</label>
        <input
            class="form-check-input" 
            type="checkbox" 
            name="contrato"
            {{ (old('contrato',$requisitos->contrato)) ? 'checked' : '' }}
        >
    </div>
</fieldset>