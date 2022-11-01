<x-layout>
    <h1>Benvenuto {{Auth::user()->name}}</h1>

    @foreach ($films as $film)
    <div class="card" style="width: 18rem;">
        <img src="{{Storage::url($film->img)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title">Titolo: {{$film->title}}</h3>
            <h4 class="card-title">Autore: {{$film->author}}</h4>
            <h5 class="card-title">Anno: {{$film->year}}</h5>
            <p class="card-title">Descrizione: {{$film->description}}</p>
            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
            <a href="{{route('editFilm', compact('film'))}}" class="btn btn-warning">Edit</a>
            {{-- Bottone per eliminazione del film --}}
            <form action="{{route('deleteFilm', compact('film'))}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Cancella il Film</button>
            </form>
        </div>
    </div>
    @endforeach
</x-layout>