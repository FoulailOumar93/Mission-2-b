
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
                <li class="smenu">
                    <a href="<?php echo e(route('chemin_voirFraisParMoisEtParVisiteurPourUnTypeDeFrais')); ?>" title="Frais par mois et par visiteur pour type de frais">Frais par mois et par visiteur pour type de frais</a>
                  </li>
                <li class="smenu">
                   <a href="<?php echo e(route('chemin_voirFraisParMoisPourUnVisiteur')); ?>" title="Frais par mois pour un visiteur">Frais par mois pour un visiteur</a>
               </li>
               <li class="smenu">
                    <a href="<?php echo e(route('chemin_voirFraisParVisiteurPourUneAnne')); ?>" title="Frais par visiteur pour une année">Frais par visiteur pour une année</a>
               </li>
  <!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa--->
                <li class="smenu">
                     <a href="<?php echo e(route('chemin_ajouterSaisie')); ?>" title="Ajouter un visiteur">Ajouter un visiteur</a>
                  </li>
                  <li class="smenu">
                    <a href="<?php echo e(route('chemin_modifierChoix')); ?>" title="Modifier un visiteur">Modifier un visiteur</a>
                  </li>
                  <li class="smenu">
                     <a href="<?php echo e(route('chemin_lister')); ?>" title="Afficher la liste des visiteurs">Liste des visiteurs</a>
                  </li>
   <!--dddddddddddddddddddddddddddddddddddddddd--->
                  <li class="smenu">
                     <a href="<?php echo e(route('chemin_fraisARembourser')); ?>" title=" remboursement">Fiches à rembourser</a>
                  </li>
                  <li class="smenu">
                    <a href="<?php echo e(route('chemin_listerfraishorsforfait')); ?>" title="fraishorsforfait">fraishorsforfait</a>
                  </li>
                 <li class="smenu">
                    <a href="<?php echo e(route('chemin_voirVisiteurParDepartement')); ?>" title="listerVisiteurParDepartement_93">listerVisiteurParDepartement</a>
                  </li>
                  <li class="smenu">
                    <a href="<?php echo e(route('chemin_supprimerChoix')); ?>" title="supprimer un visiteur">supprimer un visiteur</a>
                  </li>
              </ul>
               
        </div>
    <?php $__env->stopSection(); ?>  
<?php echo $__env->make('modeles/visiteur', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\Missions\AP\E5\Mission-2-b\resources\views/sommaireCompta.blade.php ENDPATH**/ ?>