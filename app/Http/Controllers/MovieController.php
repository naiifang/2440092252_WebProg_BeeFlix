<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $dramas = Movie::where('genre_id', 1)->take(4)->get();
        $kids = Movie::where('genre_id', 2)->take(4)->get();
        $tvshows = Movie::where('genre_id', 3)->take(4)->get();

        return view('home', compact('dramas', 'kids', 'tvshows'));
    }
}
