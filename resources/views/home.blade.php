@extends('layouts/main')

@section('content')
  
<h1>Database Film</h1>

    @foreach ($movies as $movie)  
    <div class="card d-flex " style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$movie->title}}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h6>
          <p class="card-text">Nazionalità: {{$movie->nationality}}</p>
          <p class="card-text">Data uscita: {{$movie->date}}</p>
          <p class="card-text">Voto: {{$movie->vote}}</p>
        </div>
    </div>
    @endforeach  
@endsection