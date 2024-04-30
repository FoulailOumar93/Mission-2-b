
 <?php $__env->startSection('contenu2'); ?>
<div id="contenu">
    <h2>Modifier Mot De Passe</h2>
    <form method="post"  action="<?php echo e(route('chemin_modifierMDP')); ?>">
                    <?php echo e(csrf_field()); ?> <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm">
            <fieldset>
                <legend>Mot De Passe Récupération</legend>
                <p>
                <label for="email">E-mail :
                <input type="email" name = "email" value = "<?php echo $leVisiteur['email'] ?>" required >
                </label><br>
            <p>
            <input id="ok" type="submit" value="Valider" size="20" />
            <input id="annuler" type="reset" value="Annuler" size="20" />
            </p> 
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Motdepasseoublie', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\Missions\AP\E5\gsbLaravel\resources\views/Motdepasseoublie.blade.php ENDPATH**/ ?>