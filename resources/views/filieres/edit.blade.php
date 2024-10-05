@extends('layouts.app')

@section('content')
    <h1>Modifier la Filière : {{ $filiere->nom }}</h1>
    <form action="{{ route('filieres.update', $filiere) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="{{ $filiere->nom }}" required>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('candidats.index') }}" class="btn btn-secondary">Annuler</a> <!-- Bouton Annuler -->
    </form>
@endsection
