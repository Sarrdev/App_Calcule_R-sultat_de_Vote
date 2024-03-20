<?php

namespace App\Http\Controllers;

use App\Models\BureauDeVote;
use App\Models\Candidat;
use App\Models\CentreDeVote;
use App\Models\Commune;
use App\Models\Departement;
use App\Models\Region;
use App\Models\ResultatVote;
use Illuminate\Http\Request;

class ResultatController extends Controller
{
    //afficher la liste des resultat
    public function afficheResultat()
    {
        // Récupérer tous les résultats enregistrés
        $resultats = ResultatVote::all();

        return view('pages.affiche_resultat', compact( 'resultats'));
        //
    }

    public function formResult()
    {
        $regions = Region::all();
        $departements = Departement::all();
        $communes = Commune::all();
        $centres = CentreDeVote::all();
        $bureaux = BureauDeVote::all();
        $candidats = Candidat::all();
        return view('pages.saisie_resultat', compact('regions', 'candidats', 'bureaux', 'centres', 'communes', 'departements'));
    }

    public function storResultat(Request $request){
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'bureau_de_vote_id' => 'required|exists:bureau_de_votes,id',
            'candidat_id' => 'required|exists:candidats,id',
            'nombre_voix' => 'required|integer|min:0',
        ]);

        $resultat = new ResultatVote();
        $resultat->bureau_de_vote_id = $validatedData['bureau_de_vote_id'];
        $resultat->candidat_id = $validatedData['candidat_id'];
        $resultat->nombre_voix = $validatedData['nombre_voix'];

        $resultat->save();

        return back()->with('success', 'Resultat enregistré(e) avec succes');

    }

}
