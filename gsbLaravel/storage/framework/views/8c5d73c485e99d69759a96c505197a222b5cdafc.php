    <?php $__env->startSection('contenu1'); ?>
    <div id="contenu">
    <h2>Liste des visiteurs </h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Login</th>
                <th scope="col">Mdp</th>
                <th scope="col">Adresse</th>
                <th scope="col">CP</th>
                <th scope="col">Ville</th>
                <th scope="col">Date d'embauche</th>
                
            </tr>
        </thead>
        <h1>le nombre de visiteur est : <?php echo e(count($les_visiteurs)); ?> </h1>
         
        <tbody>
        <?php
       
        foreach($les_visiteurs as $visiteur) 
        {
        ?>
        <tr>
            <td> <?php echo $visiteur['id']; ?> </td>
            <td> <?php echo $visiteur['nom']; ?> </td>
            <td> <?php echo $visiteur['prenom']; ?> </td>
            <td> <?php echo $visiteur['login']; ?> </td>
            <td> <?php echo $visiteur['mdp']; ?> </td>
            <td> <?php echo $visiteur['adresse']; ?> </td>
            <td> <?php echo $visiteur['cp']; ?> </td>
            <td> <?php echo $visiteur['ville']; ?> </td>
            <td> <?php echo $visiteur['dateEmbauche']; ?> </td>


            </td>

        </tr> 
        <?php
        }
        


        ?>
        </tbody>
        </table>
        <form action="<?php echo e(route('chemin_pdf')); ?>" method="post">
        <?php echo e(csrf_field()); ?> <!-- laravel va ajouter un champ caché avec un token -->
        <div class="piedForm">
        <p>
        <?php
        foreach($les_visiteurs as $visiteur) 
        ?>
        
                <input type="hidden" name = "id[]" value="<?= $visiteur['id']?>">
                <input type="hidden" name = "nom[]" value="<?= $visiteur['nom']?>" >
                <input type="hidden" name = "prenom[]" value="<?= $visiteur['prenom']?>">                
                <input type="hidden" name = "adresse[]" value="<?= $visiteur['adresse']?>">
                <input type="hidden" name = "cp[]" value="<?= $visiteur['cp']?>">
                <input type="hidden" name = "ville[]" value="<?= $visiteur['ville']?>" >
                <input type= "hidden" name = "dateEmbauche" value="<?= $visiteur['dateEmbauche']?>">
               
          <input id="ok" type="submit" value="pdf" size="20" />
        </p> 




    <?php $__env->stopSection(); ?>  
    
    
<?php echo $__env->make('sommaireCompta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\APLICATIONS\laragon\www\Missions\gsbLaravel\resources\views/listerVisiteurs.blade.php ENDPATH**/ ?>