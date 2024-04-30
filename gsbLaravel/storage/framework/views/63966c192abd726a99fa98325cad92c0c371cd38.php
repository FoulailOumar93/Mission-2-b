<?php $__env->startSection('contenu2'); ?>



 <table class="listeLegere">
<caption>Montant des frais par visiteur pour une année</caption>

    <tr> 
      <th scope="col">Visiteur</th>
      <th scope="col">Montant</th>
    </tr>
    <?php $__currentLoopData = $lesInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
                <td class="qteForfait"><?php echo e($unInfo['LeVisiteur']); ?> </td>

                <td class="qteForfait"><?php echo e($unInfo['LeMontant']); ?> </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


<a href="fraisParVisiteur.json">Exporter au format json</a>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('voirFraisParVisiteurPourUneAnne', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\APLICATIONS\laragon\www\Missions\gsbLaravel\resources\views/afficherFraisParVisiteurPourUneAnne.blade.php ENDPATH**/ ?>