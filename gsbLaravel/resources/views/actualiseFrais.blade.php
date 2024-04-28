@extends ('validerFicheFrais')
@section('contenu2')

    <h2>Actualiser la fiche frais du mois {{ $numMois }}-{{ $numAnnee }}</h2>
    <form method="post"  action="{{ route('chemin_updateFrais') }}">
                    {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm">
            <fieldset>
                <legend>Eléments forfaitisés</legend>
             
                <input type = "hidden" name = "leVisiteur" id="leVisiteur" value="{{ $nomVisiteur}} " > 
                <input type = "hidden" name = "leMois" id="leMois" value="{{ $leMois}} " > 

                @includeWhen($erreurs != null, 'msgerreurs', ['erreurs' => $erreurs]) 
                @includeWhen($message != "", 'message', ['message' => $message])
                @foreach ($lesFrais as $key => $frais)
           
                    </select>
                    <p>
                    <input type = "hidden" name = "lesLibFrais[]"
                            @if($method  == 'GET')
                                value = "{{$frais['libelle']}}"
                            @else
                                value ="{{$lesLibFrais[$loop->index]}}"
                            @endif>  
                    <label name = "libelle" for="idFrais">
                                @if($method  == 'GET')
                                    {{$frais['libelle']}}
                                @else
                                    {{$lesLibFrais[$loop->index]}}
                                @endif
                    </label>
                    <input type="text" required
                                @if($method  == 'GET')
                                    name = "lesFrais[{{$frais['idfrais']}}]"
                                    value = "{{$frais['quantite']}}"
                                @else
                                    name = "lesFrais[{{$key}}]"
                                    value = "{{$frais}}"
                                @endif 
                              
                        </p>
                @endforeach
            </fieldset>
          
        </div>
        <div class="piedForm">
            <p>
            <input id="ok" type="submit" value="Valider" size="20" />
            <input id="annuler" type="reset" value="Annuler" size="20" />
            </p> 
            
        </div>
    </form>
    <form action="{{ route('chemin_afficheFrais') }}" method="get">
    <input type = "hidden" name = "leVisiteur" id="leVisiteur" value="{{ $nomVisiteur}} " > 
        <input type = "hidden" name = "leMois" id="leMois" value="{{ $leMois}} " > 
        <input id="ok" type="submit" value="afficher" size="20" />
    </form>
@endsection