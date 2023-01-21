@extends('base')

@section('title')
Gest-Part | Liste des participants
@endsection

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