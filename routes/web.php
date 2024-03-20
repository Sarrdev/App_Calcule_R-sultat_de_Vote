<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\GagnantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ResultatController;
use App\Http\Controllers\ResultatVote;
use App\Http\Controllers\ResultatVoteController;
use App\Models\Region;
use App\Models\ResultatVote as ModelsResultatVote;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AuthController::class,'inscription'])->name('inscription');
Route::post('/',[AuthController::class,'validinscrip'])->name('inscription');
Route::get('/pages/connexion',[AuthController::class,'connexion'])->name('connexion');
Route::post('/pages/connexion', [AuthController::class, 'connexionvalid'])->name('login');

Route::get('/pages/index', [HomeController::class, 'index'])->name('pages.index');
//Afficher la liste des candidats
Route::get('/pages/listcandidat', [CandidatController::class, 'listCandidat'])->name('pages.listcandidat');
//Affichage du formulaire create_candidat
Route::get('/pages/create_candidat', [CandidatController::class, 'candidat'])->name('pages.create_candidat');
//enregistrer un candidat avec la méthode storeCandidat
Route::post('/pages/create_candidat',[CandidatController::class, 'storeCandidat'])->name('pages.storecandidat');
//Affichage du formulaire edit.blade.php
Route::get('/pages/edit/{id}',[CandidatController::class, 'edit'])->name('pages.edit');
//modifier un candidat
Route::post('/pages/edit/{id}', [CandidatController::class, 'update'])->name('pages.update');
//supprimer un candidat
Route::get('pages/delete/{id}', [CandidatController::class, 'delete'])->name('pages.delete');
//Liste region
Route::get('/pages/listregion/', [RegionController::class, 'listregion'])->name('pages.listregion');
//Affichage du formulaire create_region
Route::get('/pages/create_region', [RegionController::class, 'Formregion'])->name('pages.formregion');
//Enregister une region avec la methode regionStor
Route::post('/pages/create_region', [RegionController::class, 'regionStor'])->name('pages.regionstor');
//Affichage du formulaire modifier region
Route::get('/pages/edit_region/{id}', [RegionController::class, 'editRegion'])->name('pages.editregion');
//Modifier une region
Route::post('/pages/edit_region/{id}', [RegionController::class, 'updateRegion'])->name('pages.updateregion');
//Supprimer region
Route::get('/pages/deleteregion/{id}', [RegionController::class, 'deleteregion'])->name('pages.deleteregion');
//Afficher formulaire saisi resulat
Route::get('/pages/saisie_resultat', [ResultatController::class, 'formResult'])->name('pages.formresult');
//Enregistrer les résultat 
Route::post('/pages/saisie_resultat', [ResultatController::class, 'storResultat'])->name('pages.storscore');
//Afficher les résultat
Route::get('/pages/affiche_result', [ResultatController::class, 'afficheResultat'])->name('pages.affiche');
//afficher candidat gagnant premier tour ou deuxieme tour
Route::get('/pages/affiche_gagnant', [GagnantController::class, 'afficheResultatVote'])->name('pages.gagnant');
//Affiche candidat perdu
Route::get('/pages/candidat_perdu', [GagnantController::class, 'afficheCandidatsPerdus'])->name('pages.affichePerdu');
