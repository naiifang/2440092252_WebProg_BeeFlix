<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(Genre $category) {
        $movies = Movie::where('genre_id', $category->id)->get();
        $category_name = $category->name;

        return view('category', compact('movies', 'category_name'));
    }
}
