@extends ('sommaireCompta')
    @section('contenu1')
      <div id="contenu">
        <h2>Valider fiche frais</h2>
      <form action="{{ route('chemin_actualiseFrais') }}" method="get">
        {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm"><p>

        <label for="lesVisiteurs" >Visiteurs : </label>
      
          <select id="leVisiteur" name="leVisiteur">
             
              @foreach($lesVisiteurs as $unVisiteur)
              {{$nom =$unVisiteur['nom']  }} 
                <@if($nom = $visiteurASelectionner)
                    <option selected value="{{ $nom}} " >  
                      {{ $unVisiteur['nom']}}  {{ $unVisiteur['prenom']}} 
                    </option>
                @else
                    <option value="{{ $nom}} " >  
                      {{ $unVisiteur['nom']}}  {{ $unVisiteur['prenom']}} 
                    </option>
                @endif
              @endforeach
          </select>
        </p>
        
          <label for="lstMois" >Mois : </label>
          <select id="lstMois" name="lstMois">
              
              @foreach($lesMois as $unMois)
              {{$mois = $unMois['mois']}}
              @if($mois == $moisASelectionner)
                    <option selected value="{{ $mois}}" >
                    {{ $mois }}
                    </option>
              @else
                    <option  value="{{ $mois}}" >
                      {{ $mois }} 
                    </option>
              @endif
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
  