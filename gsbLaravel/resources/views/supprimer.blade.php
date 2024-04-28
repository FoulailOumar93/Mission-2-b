<!--@extends ('sommaireCompta')
    @section('contenu1')
      <div id="contenu">
       <!- <h2>supprimer un visiteur</h2>
      <form action="{{ route('chemin_supprimerValider') }}" method="get">
        {{ csrf_field() }} <!- laravel va ajouter un champ caché avec un token -->
       <!-- <div class="corpsForm"><p>

        <label for="lesVisiteurs" >Visiteurs : </label>
      
          <select id="leVisiteur" name="nom">
             
              @foreach($lesVisiteurs as $unVisiteur)
              {{$nom =$unVisiteur['nom']  }} 

                    <option value="{{ $nom}} " >  
                      {{ $unVisiteur['nom']}}  {{ $unVisiteur['prenom']}} 
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