@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-center">Ajouter un Candidat</h1>
        <form action="{{ route('candidats.store') }}" method="POST">
            @csrf

            <div class="card shadow mx-auto" style="max-width: 500px;">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>

                    <div class="form-group">
                        <label for="note">Note :</label>
                        <input type="number" class="form-control" id="note" name="note" required>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-primary">Créer</button>
                        <a href="{{ route('candidats.index') }}" class="btn btn-secondary">Annuler</a> <!-- Bouton Annuler -->
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
