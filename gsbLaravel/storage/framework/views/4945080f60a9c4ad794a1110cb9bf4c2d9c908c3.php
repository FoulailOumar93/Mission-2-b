    <?php $__env->startSection('contenu1'); ?>
      <div id="contenu">
        <h2>Mes fiches de frais</h2>
        <h3>Mois à sélectionner : </h3>
      <form action="<?php echo e(route('chemin_listeFrais')); ?>" method="post">
        <?php echo e(csrf_field()); ?> <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm"><p>
          <label for="lstMois" >Mois : </label>
          <select id="lstMois" name="lstMois">
              <?php $__currentLoopData = $lesMois; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mois): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($mois['mois'] == $mois): ?>
                    <option selected value="<?php echo e($mois['mois']); ?>">
                      <?php echo e($mois['numMois']); ?>/<?php echo e($mois['numAnnee']); ?> 
                    </option>
                  <?php else: ?> 
                    <option value="<?php echo e($mois['mois']); ?>">
                      <?php echo e($mois['numMois']); ?>/<?php echo e($mois['numAnnee']); ?> 
                    </option>
                  <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </p>
        </div>
        <div class="piedForm">
        <p>
          <input id="ok" type="submit" value="Valider" size="20" />
          <input id="annuler" type="reset" value="Effacer" size="20" />
        </p> 
        </div>
          
        </form>
  <?php $__env->stopSection(); ?> 
 
<?php echo $__env->make('sommaire', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon+\www\gsbLaravel\resources\views/listemois.blade.php ENDPATH**/ ?>