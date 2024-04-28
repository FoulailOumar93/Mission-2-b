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
        
        
                <input id="ok" type="submit" value="Valider" size="20" />
                <!-- Bouton pour exporter en PDF -->
                <button formaction="{{ route('chemin_exportpdf') }}" type="submit">Exporter PDF</button>
            </p>
        </div>
    </form>
</div>
@endsection
