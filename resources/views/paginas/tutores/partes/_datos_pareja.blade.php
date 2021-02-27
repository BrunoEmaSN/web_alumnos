<fieldset>
    <legend>Datos Pareja</legend>
    <div class="col-md-6">
        <label for="pareja_nombre" class="form-label">Nombre</label>
        <input
            class="form-control"
            type="text"
            name="pareja_nombre"
            id="pareja_nombre"
            value="{{ old('pareja nombre',$pareja->pareja_nombre)}}"
        >
    </div>
    <div class="col-md-6">
        <label for="pareja_apellido" class="form-label">Apellido</label>
        <input
            class="form-control"
            type="text"
            name="pareja_apellido"
            id="pareja_apellido"
            value="{{ old('pareja apellido',$pareja->pareja_apellido)}}"
        >
    </div>
    <div class="col-md-6">
        <label for="pareja_dni" class="form-label">D.N.I. de la Pareja</label>
        <input
            class="form-control"
            type="number"
            name="pareja_dni"
            id="pareja_dni"
            value="{{ old('pareja dni',$pareja->pareja_dni)}}"
        >
    </div>
    <div class="col-md-6">
        <label for="pareja_telefono_fijo" class="form-label">Telefono Fijo</label>
        <input
            class="form-control"
            type="number"
            name="pareja_telefono_fijo"
            id="pareja_telefono_fijo"
            value="{{ old('pareja telefono fijo',$pareja->pareja_telefono_fijo)}}"
        >
    </div>
    <div class="col-md-6">
        <label for="pareja_telefono_movil" class="form-label">Telefono Movil</label>
        <input
            class="form-control"
            type="number"
            name="pareja_telefono_movil"
            id="pareja_telefono_movil"
            value="{{ old('pareja telefono movil',$pareja->pareja_telefono_movil)}}"
        >
    </div>
</fieldset>