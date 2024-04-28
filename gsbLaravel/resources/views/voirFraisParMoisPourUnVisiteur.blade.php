@extends ('sommaireCompta')
@section('contenu1')

<div id="contenu">
        <h2>Frais par mois pour un visiteur</h2>
        <h3>Visiteur à sélectionner : </h3>
       <form action="{{ route('chemin_afficherFraisParMoisPourUnVisiteur') }}" method="post">
        {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm"><p>
          <label for="lstMois" >Type : </label>
          <select id="lstMois" name="visiteur">
              @foreach($lesVisiteurs as $unVisiteur)
                    <option  value="{{ $unVisiteur['idVisiteur'] }}">
                      {{ $unVisiteur['idVisiteur'] }} 
                    </option>
              @endforeach
          </select>
        </p>
        </div>
        <div class="piedForm">
        <p>
          <input id="ok" type="submit" value="Valider" size="20" />
        </p> 
        </div>
          
        </form> 
@endsection
