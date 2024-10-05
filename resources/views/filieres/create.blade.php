@extends('layouts.app')

@section('content')
    <h1>Ajouter une Filière</h1>
    <form action="{{ route('filieres.store') }}" method="POST">
        @csrf
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <button type="submit" class="btn btn-primary">Créer</button>
        <a href="{{ route('candidats.index') }}" class="btn btn-secondary">Annuler</a> <!-- Bouton Annuler -->
    </form>
@endsection
