<section>
    @foreach ($hopitals as $hopital)
    <div class="card" style="width: 18rem;">
        <img src={{asset('/img/saintluc.jpg')}} class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$hopital->nom}}</h5>
                <p class="card-text">{{$hopital->adresse}}</p>
                <a href="{{ route('info.index') }}" class="btn btn-primary">Voir Hôpital</a>
            </div>
        </div>
        @endforeach
        {{-- <div class="card" style="width: 18rem;">
            <img src={{asset('/img/erasme.jpg')}} class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src={{asset('/img/paulbrien.jpg')}} class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div> --}}
</section>
