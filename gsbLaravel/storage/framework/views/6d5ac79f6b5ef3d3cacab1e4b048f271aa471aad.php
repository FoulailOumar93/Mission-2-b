
    <?php $__env->startSection('menu'); ?>
            <!-- Division pour le sommaire -->
        <div id="menuGauche">
            <div id="infosUtil">
                  
             </div>  
              <ul id="menuList">
                <li >
                  <strong>Bonjour <?php echo e($comptable['nom'] . ' ' . $comptable['prenom']); ?></strong> 
                  <li class="smenu">
                     <a href="<?php echo e(route('chemin_validerFrais')); ?>" title="valider fiche de frais ">Valider fiche frais</a>
                  </li>
                <li class="smenu">
                  <a href="<?php echo e(route('chemin_deconnexion')); ?>" title="Se déconnecter">Déconnexion</a>
                </li>
              </ul>
               
        </div>
    <?php $__env->stopSection(); ?>  
<?php echo $__env->make('modeles/visiteur', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\APLICATIONS\laragon\www\gsbLaravel\resources\views/sommaireCompta.blade.php ENDPATH**/ ?>