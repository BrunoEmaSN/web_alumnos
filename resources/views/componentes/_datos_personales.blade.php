<fieldset>
    <legend>Datos personales</legend>
    <div class="row">
        <div class="col-md-3">
            <label for="tipo_documento" class="form-label">Tipo de Documento<small>(*)</small></label>
            <select class="form-select" name="tipo_documento" id="tipo_documento">
                <option
                    value="CUIL"
                    {{ (old('tipo_documento',$datos_personales->tipo_documento) == 'CUIL') ? 'selected' : '' }}
                >
                    C.U.I.L.
                </option>
                <option
                    value="CUIT"
                    {{ (old('tipo_documento',$datos_personales->tipo_documento) == 'CUIT') ? 'selected' : '' }}
                >
                    C.U.I.T.
                </option>
                <option
                    value="DNI"
                    {{ (old('tipo_documento',$datos_personales->tipo_documento) == 'DNI') ? 'selected' : '' }}
                >
                    D.N.I.
                </option>
                <option
                    value="LE"
                    {{ (old('tipo_documento',$datos_personales->tipo_documento) == 'LE') ? 'selected' : '' }}
                >
                    Libreta Enrolamiento
                </option>
                <option
                    value="LC"
                    {{ (old('tipo_documento',$datos_personales->tipo_documento) == 'LC') ? 'selected' : '' }}
                >
                    Libreta Civica
                </option>
                <option
                    value="O"
                    {{ (old('tipo_documento',$datos_personales->tipo_documento) == 'O') ? 'selected' : '' }}
                >
                    Otros
                </option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="documento" class="form-label">Documento<small>(*)</small></label>
            <input
                class="form-control @error('documento') is-invalid @enderror"
                type="number"
                name="documento"
                id="documento"
                placeholder="documento"
                value="{{ old('documento', $datos_personales->id_dp) }}"
            >
            @error('documento')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre<small>(*)</small></label>
            <input
                class="form-control @error('nombre') is-invalid @enderror"
                type="text"
                name="nombre"
                id="nombre"
                placeholder="nombre"
                value="{{ old('nombre', $datos_personales->nombre) }}"
            >
            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="apellido" class="form-label">Apellido<small>(*)</small></label>
            <input
                class="form-control @error('apellido') is-invalid @enderror"
                type="text"
                name="apellido"
                id="apellido"
                placeholder="apellido"
                value="{{ old('apellido', $datos_personales->apellido) }}"
            >
            @error('apellido')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento<small>(*)</small></label>
            <input 
                class="form-control @error('fecha_nacimiento') is-invalid @enderror"
                type="date"
                name="fecha_nacimiento"
                id="fecha_nacimiento"
                placeholder="fecha nacimiento"
                value="{{ old('fecha_nacimiento', $datos_personales->fecha_nacimiento) }}"
            >
            @error('fecha_nacimiento')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="nacionalidad" class="form-label">Nacionalidad<small>(*)</small></label>
            <input
                class="form-control @error('nacionalidad') is-invalid @enderror"
                type="text"
                name="nacionalidad"
                id="nacionalidad"
                placeholder="nacionalidad"
                value="{{ old('nacionalidad', $datos_personales->nacionalidad) }}"
            >
            @error('nacionalidad')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="lugar_nacimiento" class="form-label">Lugar Nacimiento<small>(*)</small></label>
            <input
                class="form-control @error('lugar_nacimiento') is-invalid @enderror"
                type="text"
                name="lugar_nacimiento"
                id="lugar_nacimiento"
                placeholder="lugar nacimiento"
                value="{{ old('lugar_nacimiento', $datos_personales->lugar_nacimiento) }}"
            >
            @error('lugar_nacimiento')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="estado_civil" class="form-label">Estado Civil</label>
            <select class="form-control" name="estado_civil" id="estado_civil">
                <option
                    value="S"
                    {{ (old('estado_civil',$datos_personales->estado_civil) == 'S') ? 'selected' : '' }}
                >
                    Soltero
                </option>
                <option
                    value="C"
                    {{ (old('estado_civil',$datos_personales->estado_civil) == 'C') ? 'selected' : '' }}
                >
                    Casado
                </option>
                <option
                    value="V"
                    {{ (old('estado_civil',$datos_personales->estado_civil) == 'V') ? 'selected' : '' }}
                >
                    Viudo
                </option>
                <option
                    value="D"
                    {{ (old('estado_civil',$datos_personales->estado_civil) == 'D') ? 'selected' : '' }}
                >
                    Divorciado
                </option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-control" name="sexo" id="sexo">
                <option
                    value="M"
                    {{ (old('sexo',$datos_personales->sexo) == 'M') ? 'selected' : '' }}
                >
                    Masculino
                </option>
                <option
                    value="F"
                    {{ (old('sexo',$datos_personales->sexo) == 'F') ? 'selected' : '' }}
                >
                    Femenino
                </option>
                <option
                    value="O"
                    {{ (old('sexo',$datos_personales->sexo) == 'O') ? 'selected' : '' }}
                >
                    Otros
                </option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="domicilio" class="form-label">Domicilio</label>
            <input
                class="form-control"
                type="text"
                name="domicilio"
                id="domicilio"
                placeholder="domicilio"
                value="{{ old('domicilio', $datos_personales->domicilio) }}"
            >
        </div>
        <div class="col-md-2">
            <label for="departamento" class="form-label">Departamento</label>
            <input
                class="form-control"
                type="text"
                name="departamento"
                id="departamento"
                placeholder="departamento"
                value="{{ old('departamento', $datos_personales->departamento) }}"
            >
        </div>
        <div class="col-md-2">
            <label for="numero" class="form-label">Numero</label>
            <input
                class="form-control"
                type="number"
                name="numero"
                id="numero"
                placeholder="numero"
                value="{{ old('numero', $datos_personales->numero) }}"
            >
        </div>
        <div class="col-md-2">
            <label for="piso" class="form-label">Piso</label>
            <input
                class="form-control"
                type="text"
                name="piso"
                id="piso"
                placeholder="piso"
                value="{{ old('piso', $datos_personales->piso) }}"
            >
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="telefono_fijo" class="form-label">Telefono Fijo</label>
            <input
                class="form-control"
                type="text"
                name="telefono_fijo"
                placeholder="telefono fijo"
                value="{{ old('telefono fijo', $datos_personales->telefono_fijo) }}"
            >
        </div>
        <div class="col-md-6">
            <label for="telefono_movil" class="form-label">Telefono Movil</label>
            <input
                class="form-control"
                type="text"
                name="telefono_movil"
                id="telefono_movil"
                placeholder="telefono movil"
                value="{{ old('telefono movil', $datos_personales->telefono_movil) }}"
            >
        </div>
    </div>
</fieldset>