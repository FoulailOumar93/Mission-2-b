<div class ="erreur">
    <ul>
        <?php $__currentLoopData = $erreurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erreur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($erreur); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div><?php /**PATH D:\laragon+\www\gsbLaravel\resources\views/msgerreurs.blade.php ENDPATH**/ ?>