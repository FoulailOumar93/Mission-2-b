@extends('modeles/visiteur')

@section('menu')
    <!-- Division pour le sommaire -->
    <div id="menuGauche">
        <div id="infosUtil">
        </div>  
        <ul id="menuList">
            <li >
                <strong>Bonjour {{ ucfirst($comptable['nom']) . ' ' . ucfirst($comptable['prenom']) }}</strong> 
            </li>
            <li class="smenu">
                <a href="{{ route('chemin_validerFrais')}}" title="valider fiche de frais">Valider fiche frais</a>
            </li>
            <li class="smenu">
                <a href="{{ route('chemin_deconnexion') }}" title="Se déconnecter">Déconnexion</a>
            </li>
        </ul>
    </div>
@endsection
