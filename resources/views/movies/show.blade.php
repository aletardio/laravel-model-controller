@extends('layouts.movies')

@section('movies-content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3>{{ $movie->title }}</h3>
                <h5>{{ $movie->original_title }}</h5>
                <p>Data di uscita: {{ $movie->date }}</p>
                <p>Lingua: {{ $movie->nationality }}</p>
                <p>Voto: {{ $movie->vote }}</p>
            </div>
        </div>
    </div>
@endsection
