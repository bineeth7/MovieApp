<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/movie/{id}', [MovieController::class, 'getMovieDetails']);

Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('movies.show');
Route::get('/movies', [MoviesController::class, 'index']);
// home page & movie page route
Route::get('/movies', [MoviesController::class, 'index'])->name('movies.index');