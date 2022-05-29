@extends('layout')

@section('title', 'BeeFlix | Category')

@section('extrahead')
    <link rel="stylesheet" href="{{ asset('style/home.css') }}">
@endsection

@section('content')

    <div class="container-lg mt-4 mb-3 p-5 py-4 categories-container">
        <div class="categories-header mb-3">
            <h2>{{ Str::upper($category_name) }}S</h2>
        </div>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="card text-bg-light col-6 col-md-3">
                    <img src="{{ asset('/storage/images/' . $movie->photo) }}" class="img-fluid card-img-top mt-4" alt="...">
                    <div class="card-body d-flex flex-column align-center mt-2 gap-2 mb-3">
                        <h5 class="card-title text-center">{{ $movie->title }}</h5>
                        <a href="/movie/{{ $movie->id }}" class="btn btn-dark">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
