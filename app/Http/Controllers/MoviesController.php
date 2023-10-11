<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index()
    {
        $apiKey = env('TMDB_API_KEY');
    
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=' . $apiKey)->json()['results'];
         //dd($popularMovies);

        $nowPlayingMovies = Http::get('https://api.themoviedb.org/3/movie/now_playing?api_key=' . $apiKey)->json()['results'];

        //dd($nowPlayingMovies);

        $genresArray = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=' . $apiKey)->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre){
            return [$genre['id']=> $genre['name']];
        });

        //dd($genres);

        return view('movies.index', [
            'popularMovies' => $popularMovies,
            'nowPlayingMovies' => $nowPlayingMovies,
            'genres' => $genres,
            
        ]);
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $apiKey = env('TMDB_API_KEY');
    
        $movie = Http::get('https://api.themoviedb.org/3/movie/' . $id . '?api_key=' . $apiKey . '&append_to_response=credits,videos,images')->json();
               
        //dump($movie);
        
        return view('show',[
            'movie' => $movie,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
