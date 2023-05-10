@extends('layouts/main')

@section('content')
  
<h1 class="text-center">Film</h1>
    <div class="container">
        @foreach ($movies as $movie)  
        <div class="card">
            <div class="card-details">
              <h5 class="card-title">{{$movie->title}}</h5>
              <h6 class="card-subtitle">{{$movie->original_title}}</h6>
              <div class="card-text">Nazionalità: {{$movie->nationality}}</div>
              <div class="card-text">Data uscita: {{$movie->date}}</div>
              <div class="card-text vote">{{$movie->vote}}</div>
            </div>
        </div>
        @endforeach  
    </div>

@endsection