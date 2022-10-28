

@foreach ($films as $film)
  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$film->title}}</h5>
      <h5 class="card-title">{{$film->description}}</h5>
      {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
      <a href="#" class="btn btn-primary">Dettaglio</a>
    </div>
  </div>
@endforeach