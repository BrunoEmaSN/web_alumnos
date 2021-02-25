<fieldset>
    <legend>Datos Pareja</legend>
    <div>
        <label for="pareja_nombre">Nombre</label>
        <input
            type="text"
            name="pareja_nombre"
            id="pareja_nombre"
            value="{{ old('pareja nombre',$pareja->pareja_nombre)}}"
        >
    </div>
    <div>
        <label for="pareja_apellido">Apellido</label>
        <input
            type="text"
            name="pareja_apellido"
            id="pareja_apellido"
            value="{{ old('pareja apellido',$pareja->pareja_apellido)}}"
        >
    </div>
    <div>
        <label for="pareja_dni">D.N.I. de la Pareja</label>
        <input
            type="number"
            name="pareja_dni"
            id="pareja_dni"
            value="{{ old('pareja dni',$pareja->pareja_dni)}}"
        >
    </div>
    <div>
        <label for="pareja_telefono_fijo">Telefono Fijo</label>
        <input
            type="number"
            name="pareja_telefono_fijo"
            id="pareja_telefono_fijo"
            value="{{ old('pareja telefono fijo',$pareja->pareja_telefono_fijo)}}"
        >
    </div>
    <div>
        <label for="pareja_telefono_movil">Telefono Movil</label>
        <input
            type="number"
            name="pareja_telefono_movil"
            id="pareja_telefono_movil"
            value="{{ old('pareja telefono movil',$pareja->pareja_telefono_movil)}}"
        >
    </div>
</fieldset>