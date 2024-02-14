@extends('layouts.movies')

@section('movies-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center pb-5">
                    I titoli dei film
                </h1>
            </div>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="box-cards text-center d-flex justify-content-center">
                        <div class="card">
                            <div class="card-details">
                                <p class="text-title">{{ $movie->title }}</p>
                                <p class="text-title">{{ $movie->original_title }}</p>
                                <p class="text-body">Data di uscita: {{ $movie->date }}</p>
                                <p class="text-body">Voto: {{ $movie->vote }}</p>
                            </div>
                            <button class="card-button"><a
                                    class="link-offset-2 link-underline link-underline-opacity-0 text-white"
                                    href="{{ route('show_movie', ['id' => $movie->id]) }}">Altre
                                    info</a></button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
