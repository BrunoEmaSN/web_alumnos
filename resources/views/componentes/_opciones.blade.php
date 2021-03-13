<a 
    type="button"
    class="btn btn-outline-info"
    href="{{ $show }}"
    title="ver"
>
    <i class="far fa-eye"></i>
</a>
<a
    type="button"
    class="btn btn-outline-warning"
    href="{{ $edit }}"
    title="editar"
>
    <i class="fas fa-edit"></i>
</a>
<form action="{{ $delete }}" method="POST">
    @method('DELETE')
    @csrf
    <button class="btn btn-outline-danger" title="eliminar">
        <i class="fas fa-times"></i>
    </button>
</form>