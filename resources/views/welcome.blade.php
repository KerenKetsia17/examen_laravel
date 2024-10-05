<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenue dans l'application de gestion des étudiants</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 max-w-md">
        <h1 class="text-2xl font-semibold text-center text-gray-700">Bienvenue !</h1>
        <p class="mt-4 text-gray-600 text-center">
            Vous êtes connecté en tant que <strong>Administrateur</strong>.
        </p>
        <p class="mt-2 text-gray-600 text-center">
            Gérez facilement les informations des étudiants et les notes.
        </p>
        
        <div class="mt-6 flex justify-center space-x-4">
            <a href="{{ route('candidats.index') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Gestion des Etudiants</a>
            
        </div>

        
    </div>
</body>
</html>
