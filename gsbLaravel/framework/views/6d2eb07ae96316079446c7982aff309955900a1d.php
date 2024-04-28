
<?php $__env->startSection('contenu1'); ?>
<div id="contenu">
    <h2>Modifier MDP</h2>
    <form method="get"  action="<?php echo e(route('chemin_modifierMdpSaisie')); ?>">
                    <?php echo e(csrf_field()); ?> <!-- laravel va ajouter un champ caché avec un token -->
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sommaireCompta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\APLICATIONS\laragon\www\Missions\gsbLaravel\resources\views/modifierMDP.blade.php ENDPATH**/ ?>