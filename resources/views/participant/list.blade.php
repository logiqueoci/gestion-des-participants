@extends('base')

@section('title', config('app.name'). '| Liste des participants')

@section('content')

<p>
    Retour -- <a href="add-participant">Enregistrer un participant</a>
</p>

<h2>
    Liste des participants
</h2>

<footer>
    <p>&copy; Copyright {{ date('Y') }} &middot; <a href='/'>Accueil</a></p>
</footer>

@endsection