<?php

use App\Http\Controllers\EpisodeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MovieController::class, 'index']);
Route::get('/movie/{movie}', [EpisodeController::class, 'index']);
Route::get('/category/{category}', [GenreController::class, 'index']);
