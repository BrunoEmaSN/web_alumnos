<div>
    @include('componentes._datos_personales', ['datos_personales' => $docentes['datos_personales']])

    @include('paginas.docentes.partes._datos_docentes', ['docentes' => $docentes['datos_docentes']])
</div>