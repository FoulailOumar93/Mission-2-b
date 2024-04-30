<?php $__env->startSection('contenu1'); ?>

<div id="contenu">
    <h2>Ajout de visiteur</h2>
    <form method="post"  action="<?php echo e(route('chemin_ajouterValider')); ?>">
                    <?php echo e(csrf_field()); ?> <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm">
            <fieldset>
                <legend>Saisie du visiteur</legend>
                <p>
                <label for="id">Id :
                <input type="text" name = "id" required>
                </label><br>

                <label for="nom">Nom :
                <input type="text" name = "nom" required>
                </label>

                <label  for="prenom">Prenom : 
                <input type="text" name = "prenom"required>
                </label>
                
                <label  for="adresse">Adresse :
                <input type="text" name = "adresse"required>
                </label>

                <label  for="cp">Code Postal :
                <input type="text" name = "cp"required>
                </label>

                <label for="ville">Ville :
                <input type="text" name = "ville" required>
                </label>

                <label  for="dateEmbauche">Date d'embauche :
                <input type= "date" name = "dateEmbauche"required>
                </label>
                </p>
            </fieldset>
        </div>
        <div class="piedForm">
            <p>
            <input id="ok" type="submit" value="Valider" size="20" />
            <input id="annuler" type="reset" value="Annuler" size="20" />
            </p> 
        </div>
    </form>
<?php $__env->stopSection(); ?>



   
<?php echo $__env->make('sommaireCompta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\APLICATIONS\laragon\www\Missions\gsbLaravel\resources\views/ajouterVisiteur.blade.php ENDPATH**/ ?>