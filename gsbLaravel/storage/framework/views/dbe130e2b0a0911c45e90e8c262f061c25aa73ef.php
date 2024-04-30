
    <?php $__env->startSection('menu'); ?>
            <!-- Division pour le sommaire -->
        <div id="menuGauche">
            <div id="infosUtil">
                  
             </div>  
               <ul id="menuList">
                   <li >
                    <strong>Bonjour <?php echo e($visiteur['nom'] . ' ' . $visiteur['prenom']); ?></strong>
                      
                   </li>
                  <li class="smenu">
                     <a href="<?php echo e(route('chemin_gestionFrais')); ?>" title="Saisie fiche de frais ">Saisie fiche de frais</a>
                  </li>
                  <li class="smenu">
                    <a href="<?php echo e(route('chemin_selectionMois')); ?>" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
                  </li>
                  <li class="smenu">
                <a href="<?php echo e(route('chemin_deconnexion')); ?>" title="Se déconnecter">Déconnexion</a>
                  </li>
                </ul>
               
        </div>
    <?php $__env->stopSection(); ?>          
<?php echo $__env->make('modeles/visiteur', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\Missions\AP\E5\gsbLaravel\resources\views/sommaire.blade.php ENDPATH**/ ?>