<script>
$(document).ready(function(){

    $('#btn_buscar').on( 'click', function() {
        let token = $('#token').val();
        let buscar = $('#buscar').val();
        let ob = {id: buscar};
        $.ajax({
            url: "{{ url('api/buscar_tutores') }}",
            headers: {'X-CSRF-TOKEN': token},
            data: ob,
            success: function(data) {
                $('#datos_tutor').empty();
                if (data != []) {
                    $('#btn_agregar').attr('disabled', false);
                    $('#datos_tutor').append(
                        '<table class="table">'+
                            '<tbody>'+
                                '<tr>'+
                                    '<td>Tipo Documento</td>'+
                                    '<td>'+
                                        '<input id="tutor_tipo_documento"class="form-control"type="text"value="'+ data.tipo_documento +'"readonly>'+
                                    '</td>'+
                                '</tr>'+
                                    '<td>Documento</td>'+
                                    '<td>'+
                                        '<input id="tutor_documento"class="form-control"type="text"value="'+ data.id_dp +'"readonly>'+
                                    '</td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td>Nombre</td>'+
                                    '<td>'+
                                        '<input id="tutor_nombre"class="form-control"type="text"value="'+ data.nombre +'"readonly>'+
                                    '</td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td>Apellido</td>'+
                                    '<td>'+
                                        '<input id="tutor_apellido"class="form-control"type="text"value="'+ data.apellido +'"readonly>'+
                                    '</td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td>Parentesco</td>'+
                                    '<td>'+
                                        '<input id="tutor_parentesco"class="form-control"type="text" required minlenght="3">'+
                                    '</td>'+
                                '</tr>'+
                            '</tbody>'+
                        '</table>'
                    )
                }
                else{
                    $('#btn_agregar').attr('disabled', true);
                    $('#datos_tutor').append(
                        '<div class="d-grid gap-2 mx-auto py-3">'+
                            '<a id="tutor_nuevo" class="btn btn-lg btn-outline-info" href="{{ route("tutores.create") }}" target="_blank">Nuevo Tutor</a>'+
                        '</div>'
                    );
                }
            },
            error: function() {
                console.log("No se ha podido obtener la información");
            }
        });
    });

    $('#btn_agregar').on('click', function() {
        let documento = $('#tutor_documento').val();
        let nombre = $('#tutor_nombre').val();
        let apellido = $('#tutor_apellido').val();
        let parentesco = $('#tutor_parentesco').val();
        if (parentesco != '' && parentesco != undefined) {
            $('#tutores').append(
                '<div class="alert alert-dark alert-dismissible fade show col-md-6" role="alert">'+
                    '<h2><strong>'+ parentesco +': </strong>'+ nombre +' '+ apellido +'</h2>'+
                    '<label for="conviven_con_alumno" class="form-check-label">Conviven con Alumno</label>'+
                    '<input class="form-check-input"id="conviven_con_alumno"name="conviven_con_alumno[]"type="checkbox">'+
                    '<input type="hidden" name="tutor_documento[]" value="'+ documento +'">'+
                    '<input type="hidden" name="tutor_parentesco[]" value="'+ parentesco +'">'+
                    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
                '</div>'
            );
            $('#modal_buscar_tutores').modal('hide');
        }
    })
});
</script>