@extends('layouts.movies')

@section('movies-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center pb-5">
                    I titoli dei film
                </h2>
            </div>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="box-cards text-center d-flex justify-content-center">
                        <div class="card cursor d-flex justify-content-center text-bg-dark mb-3" style="max-width: 18rem;">
                            <h4 class="card-header">{{ $movie->title }}</h4>
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->original_title }}</h5>
                                <p class="card-text">Lingua: {{ $movie->nationality }}</p>
                                <p class="card-text">Data di uscita: {{ $movie->date }}</p>
                                <p class="card-text">Voto: {{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
