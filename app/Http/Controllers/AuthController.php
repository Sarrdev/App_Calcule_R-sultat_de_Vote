<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //vue création de compte
    public function inscription()
    {
        return view('pages.inscription');
    }

    //valider inscription
    public function validinscrip(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Créer un nouvel utilisateur avec les données validées
        $user = new User();

        $user->nom = $validatedData['nom'];
        $user->prenom = $validatedData['prenom'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);

        // Enregistrer l'utilisateur dans la base de données
        $user->save();

        // Rediriger l'utilisateur avec un message de succès
        return back()->with('success', 'Inscription réussie');
    }


    //vue connexion
    public function connexion()
    {
        return view('pages.connexion');
    }

    public function connexionvalid(Request $request){
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)){
            return redirect('/pages/index')->with('success', 'connexion réussi');
        }
        return back()->with('error', 'Email ou Mot de passe incorrect');
    }
}


