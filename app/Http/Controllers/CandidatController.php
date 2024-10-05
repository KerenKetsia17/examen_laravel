<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Filiere;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Récupérer les candidats et les filières
         $candidats = Candidat::with('filieres')->get(); 
         $filieres = Filiere::all(); 
 
         return view('candidats.index', compact('candidats', 'filieres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres = Filiere::all();
        return view('candidats.create', compact('filieres')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'note' => 'required|integer|min:0|max:20',
        ]);
    
        // Déterminer la filière en fonction de la note
        $id_filiere = null;
        if ($request->note > 14) {
            $id_filiere = Filiere::where('nom', 'GL')->first()->id; 
        } elseif ($request->note >= 12) {
            $id_filiere = Filiere::where('nom', 'IAGE')->first()->id; 
        }
    
        // Si aucune filière n'est trouvée (ce qui ne devrait pas arriver avec les conditions ci-dessus)
        if (!$id_filiere) {
            return redirect()->back()->withErrors(['note' => 'La note doit être supérieure à 12.']);
        }
    
        Candidat::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'note' => $request->note,
            'id_filiere' => $id_filiere,
        ]);
    
        return redirect()->route('candidats.index')->with('success', 'Candidat créé avec succès !');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(Candidat $candidat)
    {
        return view('candidats.show', compact('candidat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidat $candidat)
    {
        $filieres = Filiere::all(); 
        return view('candidats.edit', compact('candidat', 'filieres')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidat $candidat)
{
    // Valider les données du formulaire
    $request->validate([
        'nom' => 'required|string|max:100',
        'prenom' => 'required|string|max:100',
        'note' => 'required|integer|min:0|max:20', 
    ]);

    // Déterminer la filière en fonction de la note
    $id_filiere = null;

    if ($request->note > 14) {
        $id_filiere = Filiere::where('nom', 'GL')->first()->id;
    } elseif ($request->note >= 12) {
        $id_filiere = Filiere::where('nom', 'IAGE')->first()->id; 
    }

    // Si aucune filière n'est trouvée
    if (!$id_filiere) {
        return redirect()->back()->withErrors(['note' => 'La note doit être supérieure à 12.']);
    }

    $candidat->update([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'note' => $request->note,
        'id_filiere' => $id_filiere,
    ]);

    return redirect()->route('candidats.index')->with('success', 'Candidat mis à jour avec succès !');
}


    
}
