<table class="table">
    <thead>
        <tr>
            <th scope="col">Type</th>
            <th scope="col">Numero</th>
        </tr>
    </thead>
    @foreach ($locals as $local)
    <tbody>
        <tr>
            <td>{{$local->nom}}</td>
            <td>{{$local->numero}}</td>
        </tr>
    </tbody>
    @endforeach
</table>
