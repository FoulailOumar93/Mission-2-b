@extends ('sommaireCompta')
    @section('contenu1')
    <div id="contenu">
    <h2>Liste fraishorsforfait </h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">LeVisiteur</th>
                <th scope="col">libelle</th>
                <th scope="col">mois</th>
                <th scope="col">LeMontant</th>
            </tr>
        </thead>
  
         
        <tbody>
        <?php
       
        foreach($les_visiteurs as $visiteur) 
        {
        ?>
        <tr>
            <td> <?php echo $visiteur['idVisiteur']; ?> </td>
            <td> <?php echo $visiteur['libelle']; ?> </td>
            <td> <?php echo $visiteur['mois']; ?> </td>
            <td> <?php echo $visiteur['montant']; ?> </td>

        </tr> 
        <?php
        }
        


        ?>




    @endsection  
    
    