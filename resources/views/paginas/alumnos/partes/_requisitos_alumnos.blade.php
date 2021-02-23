<div>
    <div>
        <label for="partida_nacimiento">Partida Nacimiento</label>
        <input
            type="checkbox"
            name="partida_nacimiento"
            {{ ($requisitos->partida_nacimiento) ? 'checked' : ''}}
        >
    </div>
    <div>
        <label for="dni">D.N.I.</label>
        <input
            type="checkbox"
            name="dni"
            {{ ($requisitos->dni) ? 'checked' : '' }}
        >
    </div>
    <div>
        <label for="cuil">C.U.I.L.</label>
        <input 
            type="checkbox"
            name="cuil"
            {{ ($requisitos->cuil) ? 'checked' : '' }}
        >
    </div>
    <div>
        <label for="foto_4x4">Foto 4 x 4</label>
        <input 
            type="checkbox" 
            name="foto_4x4"
            {{ ($requisitos->foto_4x4) ? 'checked' : '' }}
        >
    </div>
    <div>
        <label for="contrato">Contrato</label>
        <input 
            type="checkbox" 
            name="contrato"
            {{ ($requisitos->contrato) ? 'checked' : '' }}
        >
    </div>
</div>