@extends('base')

@section('content')
    <p class="text-center">Votre lien est :</p>
    <h5 class="text-center">{{ $link->url }}</h5>
@endsection
