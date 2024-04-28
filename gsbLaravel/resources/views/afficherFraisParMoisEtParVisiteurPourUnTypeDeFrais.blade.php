@extends ('voirFraisParMoisEtParVisiteurPourUnTypeDeFrais')
@section('contenu2')



 <table class="listeLegere">
<caption>Montant des frais par mois et par visiteur pour un type de frais</caption>

    <tr> 
      <th scope="col">Visiteur</th>
      <th scope="col">Mois</th>
      <th scope="col">Montant</th>
      <th scope="col">Prix unitaire</th>
      <th scope="col">Quantité</th>
    </tr>
    @foreach($lesInfos as $unInfo)
        <tr>
                <td class="qteForfait">{{$unInfo['LeVisiteur']}} </td>

                <td class="qteForfait">{{$unInfo['LeMois']}} </td>

                <td class="qteForfait">{{$unInfo['LeMontant']}} €</td>

                <td class="qteForfait">{{$unInfo['LePrixUnitaire']}} €</td>

                <td class="qteForfait">{{$unInfo['LaQuantite']}} </td>
        </tr>
        @endforeach
</table>

<a href="fraisParMoisEtParVisiteur.json">Exporter au format json</a>

</div>
@endsection

