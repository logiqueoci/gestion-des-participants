@extends('base')

@section('title', config('app.name'). '| Ajouter un participant')

@section('content')

<p>
    Voir -- <a href="{{ route('app_list_participant') }}">Consulter la liste des participants </a>
</p>

<h2>
    Enregistrer les participants
</h2>

@endsection