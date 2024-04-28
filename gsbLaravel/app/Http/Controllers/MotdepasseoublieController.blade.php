<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConnexionModel; // Import du modèle ConnexionModel
use PdoGsb;

class ConnexionController extends Controller
{
public function ModifierMotDePasse(Request $request)
    {
       
        $email = $request['email'];
        $visiteur = PdoGsb::getInfosVisiteur($email);

        if (!is_array($visiteur)) {
            $compta = PdoGsb::getInfosCompta($email);
            if (!is_array($compta)) {
                $erreurs[] = "Votre email n'existe pas";
                return view('Motdepasseoublie')->with('erreurs', $erreurs);
            } else {
                session(['comptable' => $compta]);
                return view('Motdepasseoublie')->with('comptable', session('comptable'));
            }
        } else {
            session(['visiteur' => $visiteur]);
            return view('Motdepasseoublie')->with('visiteur', session('visiteur'));
        }
    }
}