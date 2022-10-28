<x-layout>
    <h1>Il dettaglio di {{$film->title}}</h1>

    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title">Titolo: {{$film->title}}</h3>
                        <h4 class="card-title">Autore: {{$film->author}}</h4>
                        <h5 class="card-title">Anno: {{$film->year}}</h5>
                        <p class="card-title">Descrizione: {{$film->description}}</p>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                        {{-- <a href="{{route('detFilm', compact('film'))}}" class="btn btn-primary">Dettaglio</a> --}}
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-layout>