<div>
    @include('componentes._datos_personales', ['datos_personales' => $tutores['datos_personales']])

    @include('paginas.tutores.partes._datos_tutores', ['tutores' => $tutores['datos_tutores']])

    @include('paginas.tutores.partes._datos_pareja', ['pareja' => $tutores['datos_pareja']])

    @include('paginas.tutores.partes._datos_padres', ['padres' => $tutores['datos_padres']])
</div>