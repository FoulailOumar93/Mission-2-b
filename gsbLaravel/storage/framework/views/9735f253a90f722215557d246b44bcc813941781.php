
<?php $__env->startSection('contenu2'); ?>

    <h2>Actualiser la fiche frais du mois <?php echo e($numMois); ?>-<?php echo e($numAnnee); ?></h2>
    <form method="post"  action="<?php echo e(route('chemin_updateFrais')); ?>">
                    <?php echo e(csrf_field()); ?> <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm">
            <fieldset>
                <legend>Eléments forfaitisés </legend>
             
                <input type = "hidden" name = "leVisiteur" id="leVisiteur" value="<?php echo e($nomVisiteur); ?> " > 
                <input type = "hidden" name = "leMois" id="leMois" value="<?php echo e($leMois); ?> " > 

                <?php echo $__env->renderWhen($erreurs != null, 'msgerreurs', ['erreurs' => $erreurs], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?> 
                <?php echo $__env->renderWhen($message != "", 'message', ['message' => $message], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
                <?php $__currentLoopData = $lesFrais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $frais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
                    </select>
                    <p>
                    <input type = "hidden" name = "lesLibFrais[]"
                            <?php if($method  == 'GET'): ?>
                                value = "<?php echo e($frais['libelle']); ?>"
                            <?php else: ?>
                                value ="<?php echo e($lesLibFrais[$loop->index]); ?>"
                            <?php endif; ?>>  
                    <label name = "libelle" for="idFrais">
                                <?php if($method  == 'GET'): ?>
                                    <?php echo e($frais['libelle']); ?>

                                <?php else: ?>
                                    <?php echo e($lesLibFrais[$loop->index]); ?>

                                <?php endif; ?>
                    </label>
                    <input type="text" required
                                <?php if($method  == 'GET'): ?>
                                    name = "lesFrais[<?php echo e($frais['idfrais']); ?>]"
                                    value = "<?php echo e($frais['quantite']); ?>"
                                <?php else: ?>
                                    name = "lesFrais[<?php echo e($key); ?>]"
                                    value = "<?php echo e($frais); ?>"
                                <?php endif; ?> 
                              
                        </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </fieldset>
          
        </div>
        <div class="piedForm">
            <p>
            <input id="ok" type="submit" value="Valider" size="20" />
            <input id="annuler" type="reset" value="Annuler" size="20" />
            </p> 
            
        </div>
    </form>
    <form action="<?php echo e(route('chemin_afficheFrais')); ?>" method="get">
    <input type = "hidden" name = "leVisiteur" id="leVisiteur" value="<?php echo e($nomVisiteur); ?> " > 
        <input type = "hidden" name = "leMois" id="leMois" value="<?php echo e($leMois); ?> " > 
        <input id="ok" type="submit" value="afficher" size="20" />
        
        
    </form>

    <form action="<?php echo e(route('chemin_exportPdf')); ?>" method="get">
    <input type = "hidden" name = "leVisiteur" id="leVisiteur" value="<?php echo e($nomVisiteur); ?> " > 
        <input type = "hidden" name = "leMois" id="leMois" value="<?php echo e($leMois); ?> " > 
        <input id="ok" type="submit" value="Export PDF" size="20" />
    </form>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('validerFicheFrais', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\APLICATIONS\laragon\www\Missions\gsbLaravel\resources\views/actualiseFrais.blade.php ENDPATH**/ ?>