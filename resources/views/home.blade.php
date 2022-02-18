@extends('base')

@section('content')
    <h1 class="text-center">Linker</h1>

    <div class="mx-auto">
        <form action="/lien/creer" method="post">
            @csrf

            <div class="mb-3">
                <label for="name">Nom du lien</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Tweet">
            </div>

            <div class="mb-3">
                <label for="url">Votre lien</label>
                <input type="text" name="url" id="url" class="form-control" placeholder="https://twitter.com/markshust/status/1494374856355463169?s=12">
            </div>
    
            <button class="btn btn-dark">Raccourcir</button>
        </form>

        <h2 class="mt-4">Mes liens</h2>
        <div class="list-group">
            @foreach ($links as $link)
            <li class="list-group-item list-group-item-action d-flex justify-content-between">
                <a href="/l/{{ $link->id }}" target="_blank">{{ $link->name }}</a>
                <a href="/l/{{ $link->id }}/afficher">Afficher</a>
            </li>
            @endforeach
        </div>
    </div>
@endsection
