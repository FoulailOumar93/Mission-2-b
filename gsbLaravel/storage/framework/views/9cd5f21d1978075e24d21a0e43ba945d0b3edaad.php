<?php $__env->startSection('contenu2'); ?>



 <table class="listeLegere">
<caption>Montant des frais par mois et par visiteur pour un type de frais</caption>

    <tr> 
      <th scope="col">Visiteur</th>
      <th scope="col">Mois</th>
      <th scope="col">Montant</th>
      <th scope="col">Prix unitaire</th>
      <th scope="col">Quantité</th>
    </tr>
    <?php $__currentLoopData = $lesInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
                <td class="qteForfait"><?php echo e($unInfo['LeVisiteur']); ?> </td>

                <td class="qteForfait"><?php echo e($unInfo['LeMois']); ?> </td>

                <td class="qteForfait"><?php echo e($unInfo['LeMontant']); ?> €</td>

                <td class="qteForfait"><?php echo e($unInfo['LePrixUnitaire']); ?> €</td>

                <td class="qteForfait"><?php echo e($unInfo['LaQuantite']); ?> </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<a href="fraisParMoisEtParVisiteur.json">Exporter au format json</a>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('voirFraisParMoisEtParVisiteurPourUnTypeDeFrais', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\APLICATIONS\laragon\www\Missions\gsbLaravel\resources\views/afficherFraisParMoisEtParVisiteurPourUnTypeDeFrais.blade.php ENDPATH**/ ?>