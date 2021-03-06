@if(session('status'))
    @if (session('status')['tipo'])
        <script>
            toastr.success("{!! session('status')['message'] !!}")
        </script>
    @else
        <script>
            toastr.error("{!! session('status')['message'] !!}")
        </script>
    @endif
@endif