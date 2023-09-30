<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;


class ViewMoviesTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_main_page_shows_correct_info()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
            'https://api.themoviedb.org/3/movie/now_playing' => $this->fakeNowPlayingMovies(),
            //'https://api.themoviedb.org/3/movie/list' => $this->fakeGenres(),
        ]);
        $response = $this->get(route('movies.index'));
    
        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
        $response->assertSee('Fake Movie');
        //$response->assertSee('Adventure, Drama, Mystery, Science Fiction, Thriller');
        $response->assertSee('Now Playing');
        $response->assertSee('Now Playing Fake Movie');

    }

public function the_movie_page_show_the_correct_info(){
    Http::fake([
        'https:://api.themoviedb.org/3/movie/*' => $this->fakeSingleMovie(),
    ]);

    $response = $this->get(route('movies.show', 12345));
    $response->assertSee('Fake Jumanji');
    $response->assertSee('Jeanne McCarthy');
    $response->assertSee('Casting Director');
    $response->assertSee('Dwayne Johnson');
}

private function fakePopularMovies(){
    return Http::response([
        'results' => [
            [
                "popularity" => 3180.6,
                "poster_path" => "/mXLOHHc1Zeuwsl4xYKjKh2280oL.jpg",
                "adult" => false,
                "backdrop_path" => "/1syW9SNna38rSl9fnXwc9fP7POW.jpg",
                "id" => 565770,
                "original_language" => "en",
                "original_title" => "Fake movie",
                "genre_ids" => [28, 878, 12],
                "title" => "Fake Movie",
                "vote_average" => 7.2,
                "overview" => "Recent college grad Jaime Reyes returns home full of aspirations for his future, only to find that home is not quite as he left it. As he searches to find his purpose in the world, fate intervenes when Jaime unexpectedly finds himself in possession of an ancient relic of alien biotechnology: the Scarab.",
                "release_date" => "2023-08-16",
            ]
        ]
    ], 200);
}

private function fakeNowPlayingMovies(){
    return Http::response([
        'results' => [
            [
                "popularity" => 3180.6,
                "poster_path" => "/mXLOHHc1Zeuwsl4xYKjKh2280oL.jpg",
                "adult" => false,
                "backdrop_path" => "/1syW9SNna38rSl9fnXwc9fP7POW.jpg",
                "id" => 565770,
                "original_language" => "en",
                "original_title" => "Now Playing Fake movie",
                "genre_ids" => [28, 878, 12],
                "title" => "Now Playing Fake Movie",
                "vote_average" => 7.2,
                "overview" => "Recent college grad Jaime Reyes returns home full of aspirations for his future, only to find that home is not quite as he left it. As he searches to find his purpose in the world, fate intervenes when Jaime unexpectedly finds himself in possession of an ancient relic of alien biotechnology: the Scarab.",
                "release_date" => "2023-08-16",
            ]
        ]
    ], 200);
}

}