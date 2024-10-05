<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer toutes les filières
        $filieres = Filiere::all();
        return view('filieres.index', compact('filieres')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filieres.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:100',
        ]);

        // Créer une nouvelle filière
        Filiere::create($request->all());

        return redirect()->route('filieres.index')->with('success', 'Filière créée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Filiere $filiere)
    {
        return view('filieres.show', compact('filiere'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filiere $filiere)
    {
        return view('filieres.edit', compact('filiere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filiere $filiere)
    {
        $request->validate([
            'nom' => 'required|string|max:100',
        ]);

        $filiere->update($request->all());

        return redirect()->route('filieres.index')->with('success', 'Filière mise à jour avec succès !');
    }

    
}

