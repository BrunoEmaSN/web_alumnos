@if(session('status'))
    @if (session('status')['tipo'] == 'exito')
        <script>
            toastr.success("{!! session('status')['message'] !!}")
        </script>
    @else
        <script>
            toastr.error("{!! session('status')['message'] !!}")
        </script>
    @endif
@endif