<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;


class RegionController extends Controller
{
    //Afficher la liste region 
    public function listregion()
    {

        $regions = Region::all();
        return view('pages.listregion', compact('regions'));
    }    

    //Afficher formulaire region
    public function Formregion()
    {
        return view('pages.create_region');
    }

    //Enregistrer une région
    public function regionStor(Request $request)
    {
        //valider les donnée du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
        ]);
        
        //Creer une nouvelle région
        $region = new Region();
        $region->nom = $validatedData['nom'];

        $region->save();

        return back()->with('success', 'Region enregistrée avec succes');

    }

    //Affichage de la vue edit.blade.php
    public function editRegion($id)
    {
        $region = Region::find($id);
        return view('pages.edit_region', compact('region'));
    }
    
    //modifier un candidat
    public function updateRegion(Request $request, $id)
    {
        $region = Region::find($id);

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $region = Region::find($id);
        $region->nom = $validatedData['nom'];

        $region->update();

        return back()->with('success', 'Region modifier avec succes');


    }

    //supprimer un candidat
    public function deleteregion($id)
    {
        $region = Region::find($id);
        $region->delete();
        $regions = Region::all();
        return view('pages.listregion', compact('regions'));
    }

}
