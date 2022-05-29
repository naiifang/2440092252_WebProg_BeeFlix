@extends('layout')

@section('title', 'BeeFlix | Home')

@section('extrahead')
    <link rel="stylesheet" href="{{ asset('style/home.css') }}">
@endsection

@section('content')

    <div class="container-lg mt-4 mb-3 p-5 py-4 categories-container" id="dramas-container">
        <div class="categories-header mb-3 d-flex justify-content-between align-items-center">
            <h2>DRAMAS</h2>
            <a href="category/{{ $dramas[0]->genre_id }}" class="text-decoration-none fw-semibold fs-5">All.. >></a>
        </div>
        <div class="row">
            @foreach ($dramas as $drama)
                <div class="card text-bg-light col-6 col-md-3">
                    <img src="{{ asset('/storage/images/' . $drama->photo) }}" class="img-fluid card-img-top mt-4" alt="...">
                    <div class="card-body d-flex flex-column align-center mt-2 gap-2 mb-3">
                        <h5 class="card-title text-center">{{ $drama->title }}</h5>
                        <a href="/movie/{{ $drama->id }}" class="btn btn-dark">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container-lg mt-4 p-5 py-4 categories-container" id="kids-container">
        <div class="categories-header mb-3 d-flex justify-content-between align-items-center">
            <h2>KIDS</h2>
            <a href="category/{{ $kids[0]->genre_id }}" class="text-decoration-none fw-semibold fs-5">All.. >></a>
        </div>
        <div class="row">
            @foreach ($kids as $kid)
                <div class="card text-bg-light col-6 col-md-3">
                    <img src="{{ asset('/storage/images/' . $kid->photo) }}" class="img-fluid card-img-top mt-4" alt="...">
                    <div class="card-body d-flex flex-column align-center mt-2 gap-2 mb-3">
                        <h5 class="card-title text-center">{{ $kid->title }}</h5>
                        <a href="/movie/{{ $kid->id }}" class="btn btn-dark">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container-lg mt-4 p-5 py-4 categories-container" id="tvshows-container">
        <div class="categories-header mb-3 d-flex justify-content-between align-items-center">
            <h2>TV SHOWS</h2>
            <a href="category/{{ $tvshows[0]->genre_id }}" class="text-decoration-none fw-semibold fs-5">All.. >></a>
        </div>
        <div class="row">
            @foreach ($tvshows as $tvshow)
                <div class="card text-bg-light col-6 col-md-3">
                    <img src="{{ asset('/storage/images/' . $tvshow->photo) }}" class="img-fluid card-img-top mt-4" alt="...">
                    <div class="card-body d-flex flex-column align-center mt-2 gap-2 mb-3">
                        <h5 class="card-title text-center">{{ $tvshow->title }}</h5>
                        <a href="/movie/{{ $tvshow->id }}" class="btn btn-dark">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
