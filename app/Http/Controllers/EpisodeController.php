<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function index(Movie $movie)
    {
        $eps = Episode::where('movie_id', $movie->id)->simplePaginate(3);
        return view('movie', [
            'movie' => $movie,
            'eps' => $eps
        ]);
    }
}
