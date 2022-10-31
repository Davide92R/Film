<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
          <a class="nav-link" href="{{route('createFilm')}}">Carica i film visti</a>
          <a class="nav-link" href="{{route('indexFilm')}}">Film</a>
          @guest
            
          <a class="nav-link" href="{{route('login')}}">Accedi</a>
          <a class="nav-link" href="{{route('register')}}">Registrati</a>

          @else

          <a class="nav-link" href="">Benvenuto: {{Auth::user()->name}}</a>
          {{-- Logout --}}
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.    getElementById('logout-form').submit();">
            Logout
          </a>
        
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
          </form>
        
          {{-- Logout end --}}
          @endguest

        </div>
      </div>
    </div>
  </nav>