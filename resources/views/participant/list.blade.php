@extends('base')

@section('title', config('app.name'). '| Liste des participants')

@section('content')

<p>
    Retour -- <a href="{{ route('app_add_participant') }}">Enregistrer un participant</a>
</p>

<h2>
    Liste des participants
</h2>

@endsection