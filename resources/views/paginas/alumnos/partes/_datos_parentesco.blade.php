<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_buscar_tutores">
    Agregar Tutor
</button>

<div id="tutores" class="row">
    @if ($tutores_alumnos != '[]')
        @foreach ($tutores_alumnos as $ta)
            <div
                class="alert alert-dark alert-dismissible fade show col-md-6"
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
    @endif
</div>