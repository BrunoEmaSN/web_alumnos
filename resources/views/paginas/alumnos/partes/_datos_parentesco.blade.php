<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_buscar_tutores">
    Agregar Tutor
</button>

<div >
    
</div>

<div class="card col-md-6" id="tutores">
    @foreach ($tutores_alumnos as $ta)
        <div
            class="alert alert-light alert-dismissible fade show"
            role="alert"
        >
            <h2>
                <strong>{{ $ta->relacion_parentesco }}:</strong>
                {{ $ta->nombre.' '.$ta->apellido }}
            </h2>
            <label
                for="conviven_con_alumno"
                class="form-check-label"
            >
                Conviven con Alumno
            </label>
            <input
                class="form-check-input"
                id="conviven_con_alumno"
                name="conviven_con_alumno[]"
                type="checkbox"
                {{ old('conviven_con_alumno',($ta->conviven_con_alumno)) ? 'checked' : '' }}
            >
            <input
                type="hidden"
                name="tutor_documento[]"
                value="{{ $ta->tutor_documento }}">
            <input
                type="hidden"
                name="tutor_parentesco[]"
                value="{{ $ta->relacion_parentesco }}"
            >
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
</div>

<hr>