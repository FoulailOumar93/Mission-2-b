@extends ('sommaireCompta')
@section('contenu1')


<div class="contenu">
    <h3>Fiche de frais à rembourser :</h3>
    <form method="POST" action="{{ route('chemin_rembourseFrais') }}">
        {{ csrf_field() }}
        <!-- On déclare la variable -->
        @php
        $montantTotal = 0;
        @endphp
        <table>

            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Montant frais</th>
                <th>Dernier modification</th>
            </tr>
            <!-- Tableau des frais a rembourser -->
            @foreach($listeFraisARembourser as $frais)
            <tr>
                <td> <input type="checkbox" name="lstARembourser[]" value="{{$frais['idVisiteur']}}" /></td>
                <td>
                    <label>{{$frais['nom']}}</label>
                </td>
                <td>
                    <label>{{$frais['prenom']}}</label>
                </td>
                <td>
                    <label>{{$frais['montantValide']}}</label>
                </td>
                <td>
                    <label>{{$frais['dateModif']}}</label>
                </td>
                <td>
                    <label>{{$frais['idVisiteur']}}</label>
                </td>
            </tr>
            <!-- Faire le calcule du montant total -->
            @php
            $montantTotal = $montantTotal + $frais["montantValide"];
            @endphp
            @endforeach

        </table>
        <!-- Afficher le montant total -->
        <p>Total = {{$montantTotal}}</p>
        <input type="submit" value="Enregistrer" />
    </form>

    <!-- Si la méthode est de type post alors afficher les frais qui ont été remboursé -->
    @if($method == 'POST')
    <h3>Il y a {{count($lesFraisRembourser)}} fiche(s) de frais qui ont été remboursé(s) sont :</h3>

    @foreach($lesFraisRembourser as $frais)
    <label>{{$frais}}</label><br />
    @endforeach

    @endif
</div>
@endsection