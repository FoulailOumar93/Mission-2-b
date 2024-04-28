
<?php $__env->startSection('contenu2'); ?>



 <table class="listeLegere">
<caption>Montant des frais par mois pour visiteur</caption>

    <tr> 
      <th scope="col">LeVisiteur</th>
      <th scope="col">Libelle</th>
      <th scope="col">LeMois</th>
      <th scope="col">LeMontant</th>

    </tr>
    <?php $__currentLoopData = $lesInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="qteForfait"><?php echo e($unInfo['idVisiteur']); ?> </td>   
            <td class="qteForfait"><?php echo e($unInfo['libelle']); ?> </td>   
            <td class="qteForfait"><?php echo e($unInfo['mois']); ?> </td>
            <td class="qteForfait"><?php echo e($unInfo['montant']); ?> </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<a href="fraisParMois.json">Expoter au format json</a>

</div>
<?php $__env->stopSection(); ?> 


<?php echo $__env->make('voirfraishorsforfaitPourUnVisiteur', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\APLICATIONS\laragon\www\Missions\gsbLaravel\resources\views/afficherfraishorsforfaitPourUnVisiteur.blade.php ENDPATH**/ ?>