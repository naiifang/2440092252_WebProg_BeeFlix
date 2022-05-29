@extends('layout')

@section('title', 'BeeFlix | Movie')

@section('extrahead')
    <link rel="stylesheet" href="{{ asset('style/movie.css') }}">
@endsection

@section('content')

    <div class="container-lg d-flex flex-row mt-4">
        <div class="card mb-3 movie-card" style="max-width: 640px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('/storage/images/' . $movie->photo) }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-4">{{ $movie->title }}</h5>
                        <span class="badge bg-warning text-dark">{{ $movie->rating }} / 5 </span>
                        <p class="card-text mt-4">{{ $movie->description }}</p>
                        <p class="card-text"><small class="text-muted">Category: <a href="/category/{{ $movie->genre_id }}"> {{ $movie->genre->name }} </a></small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3 episodes-card p-3 pt-4">
            <p class="card-text fs-6 fw-semibold">EPISODES</p>
            <table class="table table-striped table-hover mb-4">
                <thead class="table table-dark">
                    <tr>
                        <th scope="col">Episode</th>
                        <th scope="col">Title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eps as $ep)
                        <tr>
                            <td>Episode {{ $ep->episode }}</td>
                            <td>{{ $ep->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $eps->links() }}
        </div>
    </div>

@endsection
