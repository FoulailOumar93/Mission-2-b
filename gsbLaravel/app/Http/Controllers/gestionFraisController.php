<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;
use MyDate;
class gestionFraisController extends Controller
{  
    
    function validerFrais(Request $request){
        if( session('comptable') != null)
        {
            $comptable = session('comptable');
            $lesMois = PdoGsb::getLesMois();
            $lesVisiteurs = PdoGsb::getInfosLesVisiteurs();
            $lesCles = array_keys( $lesVisiteurs );
		    $visiteurASelectionner = $lesCles[0];
            $lesCles = array_keys( $lesMois );
		    $moisASelectionner = $lesCles[0];
            //dd( $visiteurASelectionner);
            return view('validerFicheFrais')
                        ->with('lesMois', $lesMois)
                        ->with('lesVisiteurs',$lesVisiteurs)
                        ->with('visiteurASelectionner',$visiteurASelectionner)
                        ->with('moisASelectionner',$moisASelectionner)
                        ->with('comptable',$comptable);  
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
     
    }
    function updateFrais(Request $request){
        if( session('comptable') != null){
            $comptable = session('comptable');
            $lesMois = PdoGsb::getLesMois();
            $lesVisiteurs = PdoGsb::getInfosLesVisiteurs();
            $nomVisiteur = $request['leVisiteur'];
            $idVisiteurArr =PdoGsb::getIdVisiteur($nomVisiteur);
            $idVisiteur =$idVisiteurArr['id'];
            $leMois = $request['leMois']; 
		    $visiteurASelectionner = $nomVisiteur;
            $moisASelectionner = $leMois;
            $numAnnee = MyDate::extraireAnnee( $leMois);
		    $numMois = MyDate::extraireMois( $leMois);
            $lesFrais = PdoGsb::getLesFraisForfait($idVisiteur,$leMois);
            $lesFrais = $request['lesFrais'];
            $lesLibFrais = $request['lesLibFrais'];
            $nbNumeric = 0;
            PdoGsb::ChangerEtatFrais($idVisiteur , $leMois);
            PdoGsb::ChangerDateModif($idVisiteur , $leMois);
            foreach($lesFrais as $unFrais){
                if(is_numeric($unFrais))
                    $nbNumeric++;
                    
            }
            $view =  view('actualiseFrais')
                    ->with('lesFrais', $lesFrais)
                    ->with('numAnnee',$numAnnee)
                    ->with('numMois',$numMois)
                    ->with('leMois',$leMois)
                    ->with('lesLibFrais',$lesLibFrais)
                    ->with('nomVisiteur',$nomVisiteur)
                    ->with('erreurs',null)
                    ->with('message',"")
                    ->with('visiteurASelectionner',$visiteurASelectionner)
                    ->with('moisASelectionner',$moisASelectionner)
                    ->with ('method',$request->method())
                    ->with('lesMois', $lesMois)
                    ->with('lesVisiteurs',$lesVisiteurs)
                    ->with('comptable',$comptable);
                    if($nbNumeric == 4){
                        $message = "La modification a été prise en compte";
                        $erreurs = null;
                        PdoGsb::majFraisForfait($idVisiteur,$leMois,$lesFrais);
                    }
                    else{
                        $erreurs[] ="Les valeurs des frais doivent être numériques";
                        $message = '';
                    }
                    return $view->with('erreurs',$erreurs)
                                ->with('message',$message);
                }
                else{
                    return view('connexion')->with('erreurs',null);
                }
    }
        
    function actualiseFrais(Request $request){
       
        if( session('comptable') != null){
            $comptable = session('comptable');
            $lesMois = PdoGsb::getLesMois();
            $lesVisiteurs = PdoGsb::getInfosLesVisiteurs();
            $nomVisiteur = $request['leVisiteur'];
            $idVisiteurArr =PdoGsb::getIdVisiteur($nomVisiteur);
            $idVisiteur =$idVisiteurArr['id'];
            $leMois = $request['lstMois']; 
            //$lesCles = array_keys( $lesVisiteurs );
		    $visiteurASelectionner = $nomVisiteur;
            // $lesCles = array_keys( $lesMois );
             $moisASelectionner = $leMois;
            $numAnnee = MyDate::extraireAnnee( $leMois);
		    $numMois = MyDate::extraireMois( $leMois);
            if(PdoGsb::estPremierFraisMois($idVisiteur,$leMois)){
                 PdoGsb::creeNouvellesLignesFrais($idVisiteur,$leMois);
            }
            $lesFrais = PdoGsb::getLesFraisForfait($idVisiteur,$leMois);
            $view = view('actualiseFrais')
                    ->with('lesFrais', $lesFrais)
                    ->with('numAnnee',$numAnnee)
                    ->with('nomVisiteur',$nomVisiteur)
                    ->with('numMois',$numMois)
                    ->with('leMois',$leMois)
                    ->with('erreurs',null)
                    ->with('message',"")
                    ->with ('method',$request->method())
                    ->with('lesMois', $lesMois)
                    ->with('visiteurASelectionner',$visiteurASelectionner)
                    ->with('moisASelectionner',$moisASelectionner)
                    ->with('lesVisiteurs',$lesVisiteurs)
                    ->with('comptable',$comptable);
            return $view;
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
    }

    function afficheFrais(Request $request){
        if( session('comptable')!= null){
            $comptable = session('comptable');
            $lesMois = PdoGsb::getLesMois();
            $lesVisiteurs = PdoGsb::getInfosLesVisiteurs();
            $leMois = $request['leMois'];   
            $nomVisiteur = $request['leVisiteur'];
            //$lesCles = array_keys( $lesVisiteurs );
		    $visiteurASelectionner = $nomVisiteur;
            // $lesCles = array_keys( $lesMois );
             $moisASelectionner = $leMois;
            $idVisiteurArr =PdoGsb::getIdVisiteur($nomVisiteur);
            $idVisiteur =$idVisiteurArr['id'];
            $lesFrais = PdoGsb::getLesFraisForfait($idVisiteur,$leMois);
		    $lesInfosFicheFrais = PdoGsb::getLesInfosFicheFrais($idVisiteur,$leMois);
		    $numAnnee = MyDate::extraireAnnee( $leMois);
		    $numMois = MyDate::extraireMois( $leMois);
            $total = PdoGsb::getTotalQuantite($idVisiteur , $leMois);
            $totalQantite= $total[0];
            $montant = PdoGsb::getMontant($idVisiteur, $leMois);
            /*$montantFinal= $montant[0];
            dd($montantFinal);*/
            if($lesFrais==false){
                return view('noFicheFrais')
                        ->with('lesMois', $lesMois)
                        ->with('lesVisiteurs',$lesVisiteurs)
                        ->with('comptable',$comptable);
            
            }
		    $libEtat = $lesInfosFicheFrais['libEtat'];
		    $montantValide = $lesInfosFicheFrais['montantValide'];
            $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
            $dateModif =  $lesInfosFicheFrais['dateModif'];
            $dateModifFr = MyDate::getFormatFrançais($dateModif);
            $vue = view('afficheFicheFrais')
                    ->with('lesMois', $lesMois)
                    ->with('lesFrais', $lesFrais)
                    ->with('leMois',$leMois)
                    ->with('numAnnee',$numAnnee)
                    //->with('montantFinal',$montantFinal)
                    ->with('montant',$montant)
                    ->with('numMois',$numMois)
                    ->with('libEtat',$libEtat)
                    ->with('montantValide',$montantValide)
                    ->with('nbJustificatifs',$nbJustificatifs)
                    ->with('dateModif',$dateModifFr)
                    ->with('visiteur',$nomVisiteur)
                    ->with('visiteurASelectionner',$visiteurASelectionner)
                    ->with('moisASelectionner',$moisASelectionner)
                    ->with('comptable',$comptable)
                    ->with('lesMois', $lesMois)
                    ->with('nomVisiteur',$nomVisiteur)
                    ->with('totalQantite',$totalQantite)
                    ->with('erreurs',null)
                    ->with('message',"")
                    ->with ('method',$request->method())
                    ->with('lesVisiteurs',$lesVisiteurs);
                   
            return $vue;
        }
        else{
            return view('connexion')->with('erreurs',null);
        }
    }

}