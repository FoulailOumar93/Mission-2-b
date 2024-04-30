

<?php $__env->startSection('contenu1'); ?>
<div id="contenu">
    <h2>Renseigner ma fiche de frais du mois <?php echo e($numMois); ?>-<?php echo e($numAnnee); ?></h2>
    <form method="post" action="<?php echo e(route('chemin_sauvegardeFrais')); ?>">
        <?php echo e(csrf_field()); ?> <!-- Laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm">
            <fieldset>
                <legend>Eléments forfaitisés</legend>
                <?php echo $__env->renderWhen($erreurs != null, 'msgerreurs', ['erreurs' => $erreurs], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?> 
                <?php echo $__env->renderWhen($message != "", 'message', ['message' => $message], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
                <?php if(!empty($lesFrais) && is_array($lesFrais)): ?>
                    <?php $__currentLoopData = $lesFrais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $frais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p>
                        <?php if(isset($frais['libelle'])): ?>
                            <label for="idFrais"><?php echo e($frais['libelle']); ?></label>
                        <?php endif; ?>
                        <?php if(isset($frais['idfrais'])): ?>
                            <input type="text" required name="lesFrais[<?php echo e($frais['idfrais']); ?>]" value="<?php echo e($frais['quantite'] ?? ''); ?>" />
                        <?php endif; ?>
                    </p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sommaire', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\Missions\AP\E5\gsbLaravel\resources\views/majFraisForfait.blade.php ENDPATH**/ ?>