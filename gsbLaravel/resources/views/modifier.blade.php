@extends ('sommaireCompta')
@section('contenu1')
<div id="contenu">
    <h2>Modifier un visiteur</h2>
    <form method="get"  action="{{ route('chemin_modifierSaisie') }}">
                    {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
        <select name="id" class="form-select" aria-label="default select example" required>
        <?php 
        foreach ($les_visiteurs as $visiteur):?>
                <option value='<?php echo $visiteur['id'];?>'>
                <?php echo $visiteur['nom'];?>
                <?php echo $visiteur['prenom'];?>
                </option>
        <?php endforeach ?>

        
        </select>

        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div>
@endsection
