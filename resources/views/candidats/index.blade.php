@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Gestion des Étudiants et Inscription</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center mb-4"> 
                    <h4>Liste des Filières</h4>
                    <a href="{{ route('filieres.create') }}" class="btn btn-success"> 
                        <i class="fas fa-plus"></i> Ajouter une Filière
                    </a>
                </div>
                <table class="table table-sm table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($filieres as $filiere)
                            <tr>
                                <td>{{ $filiere->id }}</td>
                                <td>{{ $filiere->nom }}</td>
                                <td>
                                    <a href="{{ route('filieres.edit', $filiere) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Modifier
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center mb-4"> 
                    <h4>Liste des Candidats</h4>
                    <a href="{{ route('candidats.create') }}" class="btn btn-success"> 
                         Ajouter un Candidat
                    </a>
                </div>
                <table class="table table-sm table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Note</th>
                            <th>Filière</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($candidats as $candidat)
                            <tr>
                                <td>{{ $candidat->id }}</td>
                                <td>{{ $candidat->nom }}</td>
                                <td>{{ $candidat->prenom }}</td>
                                <td>{{ $candidat->note }}</td>
                                <td>{{ $candidat->filieres ? $candidat->filieres->nom : 'Non affecté' }}</td>
                                <td>
                                    <a href="{{ route('candidats.edit', $candidat) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Modifier
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #f8f9fa; 
        }

        h1, h4 {
            color: #333; 
        }

        .table {
            margin-bottom: 20px; 
        }
        .row {
            margin-top: 100px; 
        }

        .table th, .table td {
            font-size: 0.85rem; 
        }

        .btn {
            margin-right: 5px; 
        }

        .thead-light {
            background-color: #e9ecef; 
        }
    </style>
@endsection
