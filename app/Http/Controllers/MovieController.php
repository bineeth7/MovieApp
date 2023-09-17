<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function getMovieDetails($id)
    {
        // $apiKey = config('services.tmdb.api_key');
        // $response = Http::get("https://api.themoviedb.org/3/movie/550?api_key=24164bf304fc983ce4f8bbef1e0c762a");

        // return $response->json();
        $popularMovies = Http::withToken(config('service.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/550?api_key=24164bf304fc983ce4f8bbef1e0c762a')
            ->json()['result'];

            dump($popularMovies);
            
            return view('index',[
                'popularMovies' => $popularMovies,  
            ]);

    }
}
