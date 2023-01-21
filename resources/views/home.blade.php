@extends('base')


@section('title', config('app.name'))

@section('content')

<h1>Bienvenue sur Gest-Part</h1>
<h2>L'application qui vous permet de gérer la liste de présence</h2>

<h3>Menu</h3>

<p><a href="add-participant">Ajouter un participant </a></p>

<p><a href="list-participant">Consulter la liste des participants </a></p>

@endsection