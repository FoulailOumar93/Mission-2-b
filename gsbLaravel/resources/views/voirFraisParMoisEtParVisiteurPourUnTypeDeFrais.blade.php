@extends ('sommaireCompta')
@section('contenu1')

<div id="contenu">
        <h2>Frais par mois et par visiteur pour un type de frais</h2>
        <h3>Type de frais à sélectionner : </h3>
       <form action="{{ route('chemin_afficherFraisParMoisEtParVisiteurPourUnTypeDeFrais') }}" method="post">
        {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm"><p>
          <label for="lstMois" >Type : </label>
          <select id="lstMois" name="type">
              @foreach($lesTypes as $unType)
                    <option  value="{{ $unType['id'] }}">
                      {{ $unType['libelle'] }} 
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
