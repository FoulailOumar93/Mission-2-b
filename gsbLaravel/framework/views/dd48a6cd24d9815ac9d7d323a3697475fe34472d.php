<?php $__env->startSection('contenu2'); ?>

<h3>Fiche de frais du mois <?php echo e($numMois); ?>-<?php echo e($numAnnee); ?> : 
    </h3>
    <div class="encadre">
    <p>
    Etat : <strong><?php echo e($libEtat); ?> depuis le <?php echo e($dateModif); ?> </strong>
         <br> Montant validé : <strong><?php echo e($montantValide); ?> </strong>
     </p>
  	<table class="listeLegere">
  	   <caption>Eléments forfaitisés </caption>
        <tr>
            <?php $__currentLoopData = $lesFraisForfait; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unFraisForfait): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <th> <?php echo e($unFraisForfait['libelle']); ?> </th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tr>
        <tr>
            <?php $__currentLoopData = $lesFraisForfait; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unFraisForfait): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td class="qteForfait"><?php echo e($unFraisForfait['quantite']); ?> 
                </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tr>
    </table>
  	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('listemois', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon+\www\gsbLaravel\resources\views/listefrais.blade.php ENDPATH**/ ?>