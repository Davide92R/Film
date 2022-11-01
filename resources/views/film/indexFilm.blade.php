<x-layout>
    <h1>I nostri Film</h1>

    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                @foreach ($films as $film)
                    <div class="card" style="width: 18rem;">
                        @if ($film->img)
                            <img src="{{Storage::url($film->img)}}" class="card-img-top" alt="...">
                        @else
                            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                        @endif
                        

                        <div class="card-body">
                        <h3 class="card-title">Titolo: {{$film->title}}</h3>
                        <h3 class="card-title">Autore: {{$film->author}}</h3>
                        {{-- <p class="card-title">Descrizione: {{$film->description}}</p> --}}
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                        <a href="{{route('detFilm', compact('film'))}}" class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>