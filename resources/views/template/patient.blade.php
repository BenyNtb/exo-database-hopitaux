<table class="table">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            {{-- <th scope="col">Prénom</th> --}}
            <th scope="col">Date de naissance</th>
            <th scope="col">Adresse</th>
            <th scope="col">Pays</th>
            <th scope="col">Ville</th>
            <th scope="col">Code Postal</th>
            <th scope="col">Telephone</th>
            <th scope="col">consultation</th>
        </tr>
    </thead>
    @foreach ($patients as $patient)
    <tbody>
        <tr>
            <td>{{$patient->name}}</td>
            {{-- <td>{{$patient->prenom}}</td> --}}
            <td>{{$patient->naissance}}</td>
            <td>{{$patient->adresse}}</td>
            <td>{{$patient->pays}}</td>
            <td>{{$patient->ville}}</td>
            <td>{{$patient->codepostal}}</td>
            <td>{{$patient->telephone}}</td>
            {{-- <td>{{$patient->telephone}}</td> --}}
        </tr>
        {{-- <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr> --}}
    </tbody>
    @endforeach
</table>
