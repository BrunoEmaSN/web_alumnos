<div>
    @include('componentes._datos_personales', ['datos_personales' => $tutores['datos_personales']])

    @include('paginas.tutores.partes._datos_tutores', ['tutores' => $tutores['datos_tutores']])

    <div id="datos_pareja" style="display: none">
        @include('paginas.tutores.partes._datos_pareja', ['pareja' => $tutores['datos_pareja']])
    </div>
</div>
<script>
    $(document).ready(function(){
		$("#tiene_pareja").on( "change", function() {
            if ($("#tiene_pareja").prop('checked')) {
                $('#datos_pareja').show();
            }
            else{
                $('#datos_pareja').hide();
            }
		});
	});
</script>