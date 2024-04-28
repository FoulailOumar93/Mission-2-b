
    <?php $__env->startSection('contenu1'); ?>
      <div id="contenu">
        <h2>supprimer un visiteur</h2>
      <form action="<?php echo e(route('chemin_supprimerValider')); ?>" method="get">
        <?php echo e(csrf_field()); ?> <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm"><p>

        <label for="lesVisiteurs" >Visiteurs : </label>
      
          <select id="leVisiteur" name="nom">
             
              <?php $__currentLoopData = $lesVisiteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unVisiteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php echo e($nom =$unVisiteur['nom']); ?> 

                    <option value="<?php echo e($nom); ?> " >  
                      <?php echo e($unVisiteur['nom']); ?>  <?php echo e($unVisiteur['prenom']); ?> 
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
<?php echo $__env->make('sommaireCompta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\Missions\AP\E4\gsbLaravel\gsbLaravel\resources\views/supprimer.blade.php ENDPATH**/ ?>