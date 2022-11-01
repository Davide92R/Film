<x-layout>
    <h1>Modifica l'inserzione precedente</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row vh-100">
            <form action="{{route('updateFilm', compact('film'))}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- overRiding che sostituisce il metodo precedente di tipo post in put --}}
                @method('put')
                <div class="mb-3">
                  <label class="form-label">Titolo</label>
                  <input type="text" class="form-control" name="title" value="{{$film->title}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Autore</label>
                    <input type="text" class="form-control" name="author" value="{{$film->author}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Anno</label>
                    <input type="integer" class="form-control" name="year" value="{{$film->year}}">
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <textarea name="description" id="" cols="300" rows="10">{{$film->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Inserisci la copertina</label>
                    <input type="file" class="form-control mt-3 mb-3" id="customFile" name="img"/>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Salva modifiche</button>
                </div>
              </form>
        </div>
    </div>
</x-layout>
