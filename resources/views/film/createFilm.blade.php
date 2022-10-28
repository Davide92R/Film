<x-layout>
    <h1>Inserisci il tuo film!</h1>

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
            <form action="{{route('storeFilm')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Titolo</label>
                  <input type="text" class="form-control" name="title" value="{{old('title')}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Autore</label>
                    <input type="text" class="form-control" name="author" value="{{old('author')}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Anno</label>
                    <input type="integer" class="form-control" name="year" value="{{old('year')}}">
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <textarea name="description" id="" cols="300" rows="10">{{old('description')}}</textarea>
                </div>
                <input type="file" class="form-control mt-3 mb-3" id="customFile" />
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</x-layout>
