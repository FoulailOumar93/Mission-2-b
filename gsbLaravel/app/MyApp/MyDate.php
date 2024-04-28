<?php
namespace App\MyApp;

class MyDate{
	
/**
 * Retourne les valeurs du mois, année, année+mois de la date courante
 
 * @param  
 * @return un tableau  
*/
    function getAnneeMoisCourant(){
        $numMois = date('m');
        if(strlen($numMois) == 1){
            $numMois = "0" .  $numMois;
        }
        $numAnnee = date('Y');
        $mois = $numAnnee . $numMois;
        return ['mois'=>$mois,'numAnnee'=>$numAnnee,'numMois'=>$numMois];
    }
	
/**
 * Extrait et retourne l'année d'une année+mois
 * @param  un string annee+mois
 * @return l'année  
*/
    function extraireAnnee($anneeMois){
        return substr( $anneeMois,0,4);
    }
/**
 * Extrait et retourne le mois d'une année+mois
 * @param  un string annee+mois
 * @return le mois  
*/
    function extraireMois($anneeMois){
        return substr( $anneeMois,4,2);
    }
/**
 * Retourne une date au format français
 * @param  une date au format américain
 * @return la date   
*/
    function getFormatFrançais($date){
        return strftime('%d-%m-%Y',strtotime($date));
    }
}