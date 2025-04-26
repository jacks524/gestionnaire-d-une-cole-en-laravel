<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;

class InscriptionController extends Controller
{
    /**
     * Afficher la liste des inscriptions.
     */
    public function index()
    {
        $inscriptions = Inscription::all(); // Récupérer toutes les inscriptions
        return view('inscriptions.index', compact('inscriptions')); // Passer les inscriptions à la vue
    }

    /**
     * Afficher le formulaire de création d'une inscription.
     */
    public function create()
    {
        return view('inscriptions.create');
    }

    /**
     * Enregistrer une nouvelle inscription.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:100',
            'matricule' => 'required|string|unique:inscriptions',
            'age' => 'required|integer',
            'classe' => 'required|string|max:50',
            'montant' => 'required|numeric',
            'parent_phone'=>'required|string',
            'sexe' => 'required|string|max:10',
        ]);

        Inscription::create($request->only([
            'nom', 'matricule', 'age', 'classe', 'montant', 'sexe','parent_phone'
        ]));

        return redirect()->route('inscriptions.index')->with('success', 'Inscription réussie !');
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required|string|max:100',
            'matricule' => 'required|string|unique:inscriptions,matricule,' . $id,
            'age' => 'required|integer',
            'classe' => 'required|string|max:50',
            'montant' => 'required|numeric',
            'sexe' => 'required|string|max:10',
            'parent_phone'=>'required|string',
        ]);

        $inscription = Inscription::findOrFail($id);
        $inscription->update($request->all());

        return redirect()->route('inscriptions.index')->with('success', 'Inscription mise à jour avec succès !');
    }

    /**
     * Supprimer une inscription.
     */
    public function destroy(string $id)
    {
        $inscription = Inscription::findOrFail($id);
        $inscription->delete();

        return redirect()->route('inscriptions.index')->with('success', 'Inscription supprimée avec succès !');
    }
    public function edit(string $id)
    {
        $inscription = Inscription::findOrFail($id);
        return view('inscriptions.edit', compact('inscription'));
    }
}



