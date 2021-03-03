@extends('layout')

@section('title', 'Inicio')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 my-3">
            <h1 class="display-4 text-primary">Web Alumnos</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro necessitatibus, repellat atque provident dolorem dolor? Assumenda labore, rem aut error molestiae dolorem! Dolores ipsum iste debitis in quidem quod ea nesciunt iusto nihil, incidunt rerum similique tempora eligendi dolorem necessitatibus quia dignissimos suscipit consequatur! Vel placeat aspernatur tenetur blanditiis architecto minima laboriosam et nemo beatae quis, in minus similique earum cupiditate laudantium numquam asperiores, repellat molestias commodi. Ipsa optio, consequuntur voluptate dolorem laboriosam qui ipsam libero quas aut a maiores totam iste autem molestiae saepe quod corporis impedit dolores, fuga id. Quae, rerum provident ad et saepe libero facere non.</p>
            <div class="d-grid gap-2">
                <button class="btn btn-lg btn-primary" type="button">Contacto</button>
                <button class="btn btn-lg btn-outline-primary" type="button">Ayuda</button>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4 my-3" src="{{ asset('img/escuela1.svg') }}" alt="fondo">
        </div>
    </div>
</div>
@endsection