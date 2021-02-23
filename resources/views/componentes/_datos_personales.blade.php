<fieldset>
    <legend>Datos personales</legend>
    <div>
        <label for="tipo_documento">Tipo de Documento</label>
        <select name="tipo_documento" id="tipo_documento">
            <option value="CUIL" {{ ($datos_personales->tipo_documento == 'CUIL') ? 'selected' : '' }}>
                C.U.I.L.
            </option>
            <option value="CUIT" {{ ($datos_personales->tipo_documento == 'CUIT') ? 'selected' : '' }}>
                C.U.I.T.
            </option>
            <option value="DNI" {{ ($datos_personales->tipo_documento == 'DNI') ? 'selected' : '' }}>
                D.N.I.
            </option>
            <option value="LE" {{ ($datos_personales->tipo_documento == 'LE') ? 'selected' : '' }}>
                Libreta Enrolamiento
            </option>
            <option value="LC" {{ ($datos_personales->tipo_documento == 'LC') ? 'selected' : '' }}>
                Libreta Civica
            </option>
            <option value="O" {{ ($datos_personales->tipo_documento == 'O') ? 'selected' : '' }}>
                Otros
            </option>
        </select>
    </div>
    <div>
        <label for="documento">Documento</label>
        <input
            type="number"
            name="documento"
            id="documento"
            placeholder="documento"
            value="{{ old('documento', $datos_personales->id_dp) }}"
        >
    </div>
    <div>
        <label for="nombre">Nombre</label>
        <input
            type="text"
            name="nombre"
            id="nombre"
            placeholder="nombre"
            value="{{ old('nombre', $datos_personales->nombre) }}"
        >
    </div>
    <div>
        <label for="apellido">Apellido</label>
        <input
            type="text"
            name="apellido"
            id="apellido"
            placeholder="apellido"
            value="{{ old('apellido', $datos_personales->apellido) }}"
        >
    </div>
    <div>
        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <input 
            type="date"
            name="fecha_nacimiento"
            id="fecha_nacimiento"
            placeholder="fecha nacimiento"
            value="{{ old('fecha nacimiento', $datos_personales->fecha_nacimiento) }}"
        >
    </div>
    <div>
        <label for="nacionalidad">Nacionalidad</label>
        <input
            type="text"
            name="nacionalidad"
            id="nacionalidad"
            placeholder="nacionalidad"
            value="{{ old('nacionalidad', $datos_personales->nacionalidad) }}"
        >
    </div>
    <div>
        <label for="lugar_nacimiento">Lugar Nacimiento</label>
        <input
            type="text"
            name="lugar_nacimiento"
            id="lugar_nacimiento"
            placeholder="lugar nacimiento"
            value="{{ old('lugar nacimiento', $datos_personales->lugar_nacimiento) }}"
        >
    </div>
    <div>
        <label for="estado_civil">Estado Civil</label>
        <select name="estado_civil" id="estado_civil">
            <option value="S" {{ ($datos_personales->estado_civil == 'S') ? 'selected' : '' }}>
                Soltero
            </option>
            <option value="C" {{ ($datos_personales->estado_civil == 'C') ? 'selected' : '' }}>
                Casado
            </option>
            <option value="V" {{ ($datos_personales->estado_civil == 'V') ? 'selected' : '' }}>
                Viudo
            </option>
            <option value="D" {{ ($datos_personales->estado_civil == 'D') ? 'selected' : '' }}>
                Divorciado
            </option>
        </select>
    </div>
    <div>
        <label for="sexo">Sexo</label>
        <select name="sexo" id="sexo">
            <option value="M" {{ ($datos_personales->sexo == 'M') ? 'selected' : '' }}>
                Masculino
            </option>
            <option value="F" {{ ($datos_personales->sexo == 'F') ? 'selected' : '' }}>
                Femenino
            </option>
            <option value="O" {{ ($datos_personales->sexo == 'O') ? 'selected' : '' }}>
                Otros
            </option>
        </select>
    </div>
    <div>
        <label for="domicilio">Domicilio</label>
        <input
            type="text"
            name="domicilio"
            id="domicilio"
            placeholder="domicilio"
            value="{{ old('domicilio', $datos_personales->domicilio) }}"
        >
    <div>
        <label for="departamento">Departamento</label>
        <input
            type="text"
            name="departamento"
            id="departamento"
            placeholder="departamento"
            value="{{ old('departamento', $datos_personales->departamento) }}"
        >
    </div>
    <div>
        <label for="numero">Numero</label>
        <input
            type="number"
            name="numero"
            id="numero"
            placeholder="numero"
            value="{{ old('numero', $datos_personales->numero) }}"
        >
    </div>
    <div>
        <label for="piso">Piso</label>
        <input
            type="text"
            name="piso"
            id="piso"
            placeholder="piso"
            value="{{ old('piso', $datos_personales->piso) }}"
        >
    </div>
    <div>
        <label for="telefono_fijo">Telefono Fijo</label>
        <input
            type="text"
            name="telefono_fijo"
            placeholder="telefono fijo"
            value="{{ old('telefono fijo', $datos_personales->telefono_fijo) }}"
        >
    </div>
    <div>
        <label for="telefono_movil">Telefono Movil</label>
        <input
            type="text"
            name="telefono_movil"
            id="telefono_movil"
            placeholder="telefono movil"
            value="{{ old('telefono movil', $datos_personales->telefono_movil) }}"
        >
    </div>
</fieldset>