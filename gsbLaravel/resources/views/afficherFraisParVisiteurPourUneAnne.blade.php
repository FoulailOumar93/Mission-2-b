@extends ('voirFraisParVisiteurPourUneAnne')
@section('contenu2')



 <table class="listeLegere">
<caption>Montant des frais par visiteur pour une année</caption>

    <tr> 
      <th scope="col">Visiteur</th>
      <th scope="col">Montant</th>
    </tr>
    @foreach($lesInfos as $unInfo)
        <tr>
                <td class="qteForfait">{{$unInfo['LeVisiteur']}} </td>

                <td class="qteForfait">{{$unInfo['LeMontant']}} </td>
        </tr>
        @endforeach
</table>


<a href="fraisParVisiteur.json">Exporter au format json</a>

</div>
@endsection

