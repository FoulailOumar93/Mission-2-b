<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConnexionModel; // Import du modèle ConnexionModel
use App\Models\Visiteur;
use PdoGsb;

class ConnexionController extends Controller
{

    public function connecter()
    {
        return view('connexion')->with('erreurs', null);
    }

    public function valider(Request $request)
    {
        $login = $request['login'];
        $mdp = $request['mdp'];
        $visiteur = PdoGsb::getInfosVisiteur($login, $mdp);

        if (!is_array($visiteur)) {
            $compta = PdoGsb::getInfosCompta($login, $mdp);
            if (!is_array($compta)) {
                $erreurs[] = "Login ou mot de passe incorrect(s)";
                return view('connexion')->with('erreurs', $erreurs);
            } else {
                session(['comptable' => $compta]);
                return view('sommaireCompta')->with('comptable', session('comptable'));
            }
        } else {
            session(['visiteur' => $visiteur]);
            return view('sommaire')->with('visiteur', session('visiteur'));
        }
    }
    public function ModifierMotDePasse(Request $request)
    {
       
        //$email = $request['email'];
       // $visiteur = PdoGsb::getInfosVisiteur($email);
return view('Motdepasseoublie');
        
    }
    public function ModifierMotDePasse2(Request $request)
    {
       
        //$email = $request['email'];
       // $visiteur = PdoGsb::getInfosVisiteur($email);

        if (!is_array($visiteur)) {
            $compta = PdoGsb::ModifierMotDePasse($email);
            if (!is_array($compta)) {
                $erreurs[] = "Votre email n'existe pas";
                return view('Motdepasseoublie')->with('erreurs', $erreurs);
            } else {
                session(['comptable' => $compta]);
                return view('sommaireCompta')->with('comptable', session('comptable'));
            }
        } else {
            session(['visiteur' => $visiteur]);
            return view('sommaire')->with('visiteur', session('visiteur'));
        }
    }
    public function deconnecter()
    {
        session(['visiteur' => null]);
        return redirect()->route('chemin_connexion');
    }

}
?>


   
