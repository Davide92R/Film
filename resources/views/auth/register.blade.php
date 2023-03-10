<x-layout>
    <h1>Registrati!</h1>

    <div class="container">
        {{-- Form registrazione --}}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Nickname</label>
                <input type="text" class="form-control" name="name">
              </div>
            <div class="mb-3">
              <label class="form-label">Inserisci la Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
              <label class="form-label">Conferma Password</label>
              <input type="password" class="form-control" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        {{-- Form registrazione end --}}
    </div>
</x-layout>