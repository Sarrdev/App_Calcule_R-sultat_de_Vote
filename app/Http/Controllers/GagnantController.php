<?php

namespace App\Http\Controllers;

use App\Models\ResultatVote;
use Illuminate\Http\Request;

class GagnantController extends Controller
{

    public function afficheCandidatsPerdus()
    {
        // Récupérer tous les résultats enregistrés
        $resultats = ResultatVote::with('candidat')->get();
    
        // Calculer les résultats des élections
        $resultatsElections = $this->calculerResultatsElections($resultats);
        
        // Calculer le total des voix
        $totalVoix = $resultats->sum('nombre_voix');
    
        // Récupérer les candidats perdus
        $candidatsPerdus = $this->candidatsPerdus($resultats, $resultatsElections['gagnantPremierTour'], $resultatsElections['candidatsSecondTour']);
    
        return view('pages.affiche_candidat_perdu', compact('candidatsPerdus', 'totalVoix'));
    }
    

    public function afficheResultatVote()
    {
        // Récupérer tous les résultats enregistrés
        $resultats = ResultatVote::with('candidat')->get();
        $resultatsCandidats = [];

        // Parcours des résultats pour cumuler les voix pour chaque candidat
        foreach ($resultats as $resultat) {
            $nomCandidat = $resultat->candidat->prenom . ' ' . $resultat->candidat->nom;

            if (array_key_exists($nomCandidat, $resultatsCandidats)) {
                $resultatsCandidats[$nomCandidat] += $resultat->nombre_voix;
            } else {
                $resultatsCandidats[$nomCandidat] = $resultat->nombre_voix;
            }
        }

        // Récupérer les noms des candidats comme étiquettes pour le graphique
        $labels = array_keys($resultatsCandidats);

        // Récupérer les totaux cumulés des voix pour chaque candidat comme données pour le graphique
        $votes = array_values($resultatsCandidats);
        
        // Calculer les résultats des élections
        $resultatsElections = $this->calculerResultatsElections($resultats);

        return view('pages.affiche_gagnant', compact('resultatsElections', 'labels', 'votes'));
    }

    private function calculerResultatsElections($resultats)
    {
        // Initialisation des variables
        $totalVoix = $resultats->sum('nombre_voix');
        $candidatsTries = [];
        $gagnantPremierTour = null;
        $pourcentageGagnant = null;
        $candidatsSecondTour = [];
    
        // Trier les candidats par pourcentage de voix (en ordre décroissant)
        $resultats->transform(function ($resultat) use ($totalVoix) {
            $resultat->pourcentageVoix = ($resultat->nombre_voix / $totalVoix) * 100;
            return $resultat;
        });
    
        $resultats = $resultats->sortByDesc('pourcentageVoix');
    
        // Déterminer le gagnant au premier tour ou les candidats pour le second tour
        foreach ($resultats as $resultat) {
            if ($resultat->pourcentageVoix >= 50) {
                $gagnantPremierTour = $resultat->candidat->prenom . ' ' . $resultat->candidat->nom;
                $pourcentageGagnant = $resultat->pourcentageVoix;
            } else {
                $candidatsTries[] = $resultat;
            }
        }
    
        // Sélectionner les candidats pour le second tour s'il n'y a pas de gagnant au premier tour
        if ($gagnantPremierTour === null) {
            $candidatsSecondTour = collect($candidatsTries)->splice(0, 2)->pluck('candidat')->map(function ($candidat) {
                return $candidat->prenom . ' ' . $candidat->nom;
            })->toArray();
        }
    
        // Sélectionner les candidats qui ont perdu
        $candidatsPerdus = collect($candidatsTries)->reject(function ($resultat) use ($gagnantPremierTour, $candidatsSecondTour) {
            return $resultat->candidat->prenom . ' ' . $resultat->candidat->nom === $gagnantPremierTour || in_array($resultat->candidat->prenom . ' ' . $resultat->candidat->nom, $candidatsSecondTour);
        })->pluck('candidat')->map(function ($candidat) {
            return $candidat->prenom . ' ' . $candidat->nom;
        })->toArray();
    
        return [
            'gagnantPremierTour' => $gagnantPremierTour,
            'pourcentageGagnant' => $pourcentageGagnant,
            'candidatsSecondTour' => $candidatsSecondTour,
            'candidatsPerdus' => $candidatsPerdus,
        ];
    }
    

    private function candidatsPerdus($resultats, $gagnantPremierTour, $candidatsSecondTour)
    {
        $candidatsPerdus = $resultats->reject(function ($resultat) use ($gagnantPremierTour, $candidatsSecondTour) {
            return $resultat->candidat->prenom . ' ' . $resultat->candidat->nom === $gagnantPremierTour || in_array($resultat->candidat->prenom . ' ' . $resultat->candidat->nom, $candidatsSecondTour);
        });

        return $candidatsPerdus;
    }
}
