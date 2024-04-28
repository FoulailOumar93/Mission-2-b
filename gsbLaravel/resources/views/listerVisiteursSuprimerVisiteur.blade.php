@extends ('sommaireCompta')
    @section('contenu1')
    <div id="contenu">
    <h2>Liste des visiteurs </h2>

    <table class="table">
        <thead>
            <tr>
               
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>

               
            </tr>
        </thead>
        <h1>le nombre de visiteur est : {{count($lesvisiteurs)}} </h1>
         
        <tbody>
        <//?php
       
        foreach ($lesvisiteurs as $visiteur) 
        {
        ?>
        <tr>
        
            <td> <//?php echo $visiteur['nom']; ?> </td>
            <td> <//?php echo $visiteur['prenom']; ?> </td>
            </td>
        </tr> 
        <?php
        
        


        ?>
        

    @endsection  
    
    