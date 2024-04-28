<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Visiteur extends Model
{
    use HasFactory;

    // Assurez-vous que le nom de la table est correctement défini
    protected $table = 'visiteurs'; // Il est commun d'utiliser le pluriel pour les noms de tables

    // Définir les champs que vous voulez rendre mass assignable
    protected $fillable = [
        'nom',
        'id', // Assurez-vous que 'id' n'a pas besoin d'être fillable si c'est une clé primaire auto-incrémentée
        'prenom',
        'login',
        'mdp',
        'adresse',
        'cp',
        'ville',
        'dateEmbauche'
    ];
}
