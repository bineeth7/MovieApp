<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/movie/{id}', [MovieController::class, 'getMovieDetails']);

Route::view('/', 'index');
Route::view('/movie', 'show');