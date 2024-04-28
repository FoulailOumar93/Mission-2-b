
    <?php $__env->startSection('contenu1'); ?>
    <div id="contenu">
    <h2>Liste des visiteurs </h2>

    <table class="table">
        <thead>
            <tr>
               
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>

               
            </tr>
        </thead>
        <h1>le nombre de visiteur est : <?php echo e(count($lesvisiteurs)); ?> </h1>
         
        <tbody>
        <?php
       
        foreach ($lesvisiteurs as $visiteur) 
        {
        ?>
        <tr>
        
            <td> <?php echo $visiteur['nom']; ?> </td>
            <td> <?php echo $visiteur['prenom']; ?> </td>
            </td>
        </tr> 
        <?php
        }
        


        ?>
        

    <?php $__env->stopSection(); ?>  
    
    
<?php echo $__env->make('sommaireCompta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\Missions\AP\E4\gsbLaravel\gsbLaravel\resources\views/listerVisiteursSuprimerVisiteur.blade.php ENDPATH**/ ?>