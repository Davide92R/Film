<x-layout>
    <h1>Il dettaglio di {{$film->title}}</h1>

    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{Storage::url($film->img)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Titolo: {{$film->title}}</h3>
                            <h4 class="card-title">Autore: {{$film->author}}</h4>
                            <h5 class="card-title">Anno: {{$film->year}}</h5>
                            <p class="card-title">Descrizione: {{$film->description}}</p>

                            @auth

                                @if (Auth::id() == $film->user->id)
                                    <a href="{{route('editFilm', compact('film'))}}" class="btn btn-warning">Edit</a>
                                    {{-- Bottone per eliminazione del film --}}
                                    <form action="{{route('deleteFilm', compact('film'))}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Cancella il Film</button>
                                    </form>
                                @endif

                            @endauth
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-layout>