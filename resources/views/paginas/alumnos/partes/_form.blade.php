<div>
    @include('paginas.alumnos.partes._datos_alumnos', ['alumnos' => $alumnos['datos_alumnos']])
    
    @include('componentes._datos_personales', ['datos_personales' => $alumnos['datos_personales']])

    @include('paginas.alumnos.partes._requisitos_alumnos', ['requisitos' => $alumnos['requisitos_alumnos']])
</div>