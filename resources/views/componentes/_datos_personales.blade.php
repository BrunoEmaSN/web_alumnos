    <div>
        <div>
            <div>
                <input 
                    type="date"
                    name="fecha_nacimiento"
                    placeholder="fecha nacimiento"
                    value="{{ old('fecha nacimiento', $datos_personales->fecha_nacimiento) }}"
                >
            </div>
            <div>
                <input
                    type="text"
                    name="nacionalidad"
                    placeholder="nacionalidad"
                    value="{{ old('nacionalidad', $datos_personales->nacionalidad) }}"
                >
            </div>
            <div>
                <input
                    type="text"
                    name="tipo_documento"
                    placeholder="tipo documento"
                    value="{{ old('tipo_documento', $datos_personales->tipo_documento) }}"
                >
            </div>
            <div>
                <input
                    type="number"
                    name="documento"
                    placeholder="documento"
                    value="{{ old('documento', $datos_personales->id_dp) }}"
                >
            </div>
        </div>
        <div>
            <div>
                <input
                    type="text"
                    name="nombre"
                    placeholder="nombre"
                    value="{{ old('nombre', $datos_personales->nombre) }}"
                >
            </div>
            <div>
                <input
                    type="text"
                    name="apellido"
                    placeholder="apellido"
                    value="{{ old('apellido', $datos_personales->apellido) }}"
                >
            </div>
            <div>
                <input
                    type="text"
                    name="estado_civil"
                    placeholder="estado civil"
                    value="{{ old('estado civil', $datos_personales->estado_civil) }}"
                >
            </div>
            <div>
                <input
                    type="text"
                    name="sexo"
                    placeholder="sexo"
                    value="{{ old('sexo', $datos_personales->sexo) }}"
                    >
            </div>
        </div>
        <div>
            <input
                type="text"
                name="domicilio"
                placeholder="domicilio"
                value="{{ old('domicilio', $datos_personales->domicilio) }}"
            >
        </div>
        <div>
            <div>
                <input
                    type="text"
                    name="departamento"
                    placeholder="departamento"
                    value="{{ old('departamento', $datos_personales->departamento) }}"
                >
            </div>
            <div>
                <input
                    type="number"
                    name="numero"
                    placeholder="numero"
                    value="{{ old('numero', $datos_personales->numero) }}"
                >
            </div>
            <div>
                <input
                    type="text"
                    name="piso"
                    placeholder="piso"
                    value="{{ old('piso', $datos_personales->piso) }}">
            </div>
        </div>
        <div>
            <div>
                <input
                    type="text"
                    name="telefono_fijo"
                    placeholder="telefono fijo"
                    value="{{ old('telefono fijo', $datos_personales->telefono_fijo) }}">
            </div>
            <div>
                <input
                    type="text"
                    name="telefono_movil"
                    placeholder="telefono movil"
                    value="{{ old('telefono movil', $datos_personales->telefono_movil) }}">
            </div>
        </div>
    </div>