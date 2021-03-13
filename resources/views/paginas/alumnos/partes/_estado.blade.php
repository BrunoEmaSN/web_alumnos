@switch($estado)
    @case('I')
        Inscripto
        @break
    @case('N')
        No Inscripto
        @break
    @case('B')
        Baja
        @break
@endswitch