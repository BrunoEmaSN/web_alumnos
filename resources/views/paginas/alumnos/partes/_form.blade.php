<div>
    @include('componentes._datos_personales', ['datos_personales' => $alumnos['datos_personales']])

    @include('paginas.alumnos.partes._datos_alumnos', ['alumnos' => $alumnos['datos_alumnos']])

    <div class="row">
        <div class="col-md-6">
            @include('paginas.alumnos.partes._requisitos_alumnos', ['requisitos' => $alumnos['requisitos_alumnos']])
        </div>
    </div>
</div>