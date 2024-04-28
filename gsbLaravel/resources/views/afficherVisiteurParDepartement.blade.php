<!--@extends ('voirVisiteurParDepartement')
@section('contenu2')



 <table class="listeLegere">
<caption>voirVisiteurParDepartement</caption>

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
    @foreach($lesInfos as $unInfo)
        <tr>
            <td class="qteForfait">{{$unInfo['LeMois']}} </td>   
            <td class="qteForfait">{{$unInfo['LeFrais']}} </td>   
            <td class="qteForfait">{{$unInfo['LeMontant']}} </td>
            <td class="qteForfait">{{$unInfo['LeMois']}} </td>   
            <td class="qteForfait">{{$unInfo['LeFrais']}} </td>   
            <td class="qteForfait">{{$unInfo['LeMontant']}} </td>
            <td class="qteForfait">{{$unInfo['LeMois']}} </td>   
            <td class="qteForfait">{{$unInfo['LeFrais']}} </td>   
            <td class="qteForfait">{{$unInfo['LeMontant']}} </td>
        </tr>
        @endforeach
</table>

<a href="fraisParMois.json">Expoter au format json</a>

</div>
@endsection

