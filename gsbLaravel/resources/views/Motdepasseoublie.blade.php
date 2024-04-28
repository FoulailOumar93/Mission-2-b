@extends ('Motdepasseoublie')
 @section('contenu2')
<div id="contenu">
    <h2>Modifier Mot De Passe</h2>
    <form method="post"  action="{{ route('chemin_modifierMDP') }}">
                    {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm">
            <fieldset>
                <legend>Mot De Passe Récupération</legend>
                <p>
                <label for="email">E-mail :
                <input type="email" name = "email" value = "" required >
                </label><br>
            <p>
            <input id="ok" type="submit" value="Valider" size="20" />
            <input id="annuler" type="reset" value="Annuler" size="20" />
            </p> 
        </div>
    </form>
@endsection