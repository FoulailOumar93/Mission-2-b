@extends ('voirFraisParMoisPourUnVisiteur')
@section('contenu2')



 <table class="listeLegere">
<caption>Montant des frais par mois pour visiteur</caption>

    <tr> 
      <th scope="col">Mois</th>
      <th scope="col">Frais</th>
      <th scope="col">Montant</th>
    </tr>
    @foreach($lesInfos as $unInfo)
        <tr>
            <td class="qteForfait">{{$unInfo['LeMois']}} </td>   
            <td class="qteForfait">{{$unInfo['LeFrais']}} </td>   
            <td class="qteForfait">{{$unInfo['LeMontant']}} </td>
        </tr>
        @endforeach
</table>

<a href="fraisParMois.json">Expoter au format json</a>

</div>
@endsection

