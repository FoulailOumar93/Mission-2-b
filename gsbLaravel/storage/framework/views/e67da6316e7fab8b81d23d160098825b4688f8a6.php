
    <?php $__env->startSection('contenu1'); ?>
      <div id="contenu">
        <h2>Valider fiche frais</h2>
      <form action="<?php echo e(route('chemin_actualiseFrais')); ?>" method="get">
        <?php echo e(csrf_field()); ?> <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm"><p>

        <label for="lesVisiteurs" >Visiteurs : </label>
      
          <select id="leVisiteur" name="leVisiteur">
             
              <?php $__currentLoopData = $lesVisiteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unVisiteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php echo e($nom =$unVisiteur['nom']); ?> 
                <<?php if($nom = $visiteurASelectionner): ?>
                    <option selected value="<?php echo e($nom); ?> " >  
                      <?php echo e($unVisiteur['nom']); ?>  <?php echo e($unVisiteur['prenom']); ?> 
                    </option>
                <?php else: ?>
                    <option value="<?php echo e($nom); ?> " >  
                      <?php echo e($unVisiteur['nom']); ?>  <?php echo e($unVisiteur['prenom']); ?> 
                    </option>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </p>
        
          <label for="lstMois" >Mois : </label>
          <select id="lstMois" name="lstMois">
              
              <?php $__currentLoopData = $lesMois; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unMois): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php echo e($mois = $unMois['mois']); ?>

              <?php if($mois == $moisASelectionner): ?>
                    <option selected value="<?php echo e($mois); ?>" >
                    <?php echo e($mois); ?>

                    </option>
              <?php else: ?>
                    <option  value="<?php echo e($mois); ?>" >
                      <?php echo e($mois); ?> 
                    </option>
              <?php endif; ?>
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
  
<?php echo $__env->make('sommaireCompta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon+\www\gsbLaravel\resources\views/validerFicheFrais.blade.php ENDPATH**/ ?>