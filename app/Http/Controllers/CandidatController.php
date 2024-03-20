<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidat;

class CandidatController extends Controller
{
    //Afficher la liste des candidats
    public function listCandidat()
    {
        $candidats = Candidat::all();
        return view('pages.listcandidat', compact('candidats'));
    }

    //Afficher la vue create_candidat
    public function candidat()
    {
        return view('pages.create_candidat');
    }

    //enregistrer un nouveau candidat
    public function storeCandidat(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'parti_politique' => 'required|string|max:255|',
            'fonction' => 'required|string|max:255|',
        ]);
        //creer un nouveau candidat
        $candidat = new Candidat();
        $candidat->prenom = $validatedData['prenom'];
        $candidat->nom = $validatedData['nom'];
        $candidat->parti_politique = $validatedData['parti_politique'];
        $candidat->fonction = $validatedData['fonction'];

        $candidat->save();//sauvegarder

        
        return back()->with('success', 'Candidat enregistré(e) avec succes');

    }

    //Affichage de la vue edit.blade.php
    public function edit($id)
    {
        $candidat = Candidat::find($id);
        return view('pages.edit', compact('candidat'));
    }
    
    //modifier un candidat
    public function update(Request $request, $id)
    {
        $candidat = Candidat::find($id);

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'parti_politique' => 'required|string|max:255|',
            'fonction' => 'required|string|max:255|',
        ]);

        $candidat = Candidat::find($id);

        $candidat->prenom = $validatedData['prenom'];
        $candidat->nom = $validatedData['nom'];
        $candidat->parti_politique = $validatedData['parti_politique'];
        $candidat->fonction = $validatedData['fonction'];

        $candidat->update();

        return back()->with('success', 'Candidat modifier avec succes');


    }

    //supprimer un candidat
    public function delete($id)
    {
        $candidat = Candidat::find($id);
        $candidat->delete();
        $candidats = Candidat::all();
        return view('pages.listcandidat', compact('candidats'));
    }
}
