<?php $__env->startSection('contenu1'); ?>

<div id="contenu">
        <h2>Frais par mois et par visiteur pour un type de frais</h2>
        <h3>Type de frais à sélectionner : </h3>
       <form action="<?php echo e(route('chemin_afficherFraisParMoisEtParVisiteurPourUnTypeDeFrais')); ?>" method="post">
        <?php echo e(csrf_field()); ?> <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm"><p>
          <label for="lstMois" >Type : </label>
          <select id="lstMois" name="type">
              <?php $__currentLoopData = $lesTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option  value="<?php echo e($unType['id']); ?>">
                      <?php echo e($unType['libelle']); ?> 
                    </option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </p>
        </div>
        <div class="piedForm">
        <p>
          <input id="ok" type="submit" value="Valider" size="20" />
        </p> 
        </div>
          
        </form> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sommaireCompta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\APLICATIONS\laragon\www\Missions\gsbLaravel\resources\views/voirFraisParMoisEtParVisiteurPourUnTypeDeFrais.blade.php ENDPATH**/ ?>