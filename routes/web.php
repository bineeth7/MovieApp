<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;


Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('movies.show');
Route::get('/movies', [MoviesController::class, 'index']);
// home page & movie page route
Route::get('/movies', [MoviesController::class, 'index'])->name('movies.index');