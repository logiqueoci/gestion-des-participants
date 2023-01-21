@extends('base')

@section('title', config('app.name'). '| Ajouter un participant')

@section('content')

<p>
    Voir -- <a href="list-participant">Consulter la liste des participants </a>
</p>

<h2>
    Enregistrer les participants
</h2>

<footer>
    <p>&copy; Copyright {{ date('Y') }} &middot; <a href='/'>Accueil</a></p>
</footer>

@endsection