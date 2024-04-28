@extends ('sommaireCompta')
@section('contenu1')

<div id="contenu">
        <h2>Frais par visiteur pour une anné</h2>
        <h3>Année à sélectionner : </h3>
       <form action="{{ route('chemin_afficherFraisParVisiteurPourUneAnne') }}" method="post">
        {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm"><p>
          <label for="lstMois" >Type : </label>
          <select id="lstMois" name="annee">
              @foreach($lesAnnees as $uneAnnee)
                    <option  value="{{ $uneAnnee['ANNEE'] }}">
                      {{ $uneAnnee['ANNEE'] }} 
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
