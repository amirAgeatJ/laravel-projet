<?php

namespace App\Http\Controllers;

use App\Models\Lecteur;
use Illuminate\Http\Request;
use Hash;

class LecteurController extends Controller
{
    // Affiche le formulaire de création d'un lecteur
    public function create()
    {
        return view('lecteurs.create');  // La vue correspondante pour le formulaire
    }
    public function show($id)
    {
        $lecteur = Lecteur::findOrFail($id);
        return view('lecteurs.show', compact('lecteur'));
    }
    
    // Enregistre un lecteur dans la base de données
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:lecteurs,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Création d'un nouveau lecteur
        Lecteur::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']), 
        ]);

        return redirect()->route('lecteurs.create')->with('success', 'Lecteur ajouté avec succès !');
    }
    public function index()
{
    // Récupérer tous les lecteurs
    $lecteurs = Lecteur::all();

    // Passer les lecteurs à la vue 'lecteurs.index'
    return view('lecteurs.index', compact('lecteurs'));
}

}
