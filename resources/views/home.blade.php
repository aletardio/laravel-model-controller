@extends('layouts.app')

@section('content')
    <div class="centered-button">
        <h1 class="text-center">Boolvideo</h1>
        <a href="{{ route('index_movie') }}" class="btn btn-sm btn-primary d-flex justify-content-center">Visualizza Film</a>
    </div>
@endsection
