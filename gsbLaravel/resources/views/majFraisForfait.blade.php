@extends('sommaire')

@section('contenu1')
<div id="contenu">
    <h2>Renseigner ma fiche de frais du mois {{ $numMois }}-{{ $numAnnee }}</h2>
    <form method="post" action="{{ route('chemin_sauvegardeFrais') }}">
        {{ csrf_field() }} <!-- Laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm">
            <fieldset>
                <legend>Eléments forfaitisés</legend>
                @includeWhen($erreurs != null, 'msgerreurs', ['erreurs' => $erreurs]) 
                @includeWhen($message != "", 'message', ['message' => $message])
                @if (!empty($lesFrais) && is_array($lesFrais))
                    @foreach ($lesFrais as $key => $frais)
                    <p>
                        @if (isset($frais['libelle']))
                            <label for="idFrais">{{$frais['libelle']}}</label>
                        @endif
                        @if (isset($frais['idfrais']))
                            <input type="text" required name="lesFrais[{{$frais['idfrais']}}]" value="{{ $frais['quantite'] ?? '' }}" />
                        @endif
                    </p>
                    @endforeach
                @endif
            </fieldset>
        </div>
        <div class="piedForm">
            <p>
                <input id="ok" type="submit" value="Valider" size="20" />
                <input id="annuler" type="reset" value="Annuler" size="20" />
            </p>
        </div>
    </form>
</div>
@endsection
