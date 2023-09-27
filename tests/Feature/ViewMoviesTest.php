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
            'https://api.themoviedb.org/3/movie/now_playing' => $this->fakNowPopularMovies(),
            'https://api.themoviedb.org/3/movie/list' => $this->fakeGenres(),
        ]);
        $response = $this->get(route('movies.index'));
    
        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
        $response->assertSee('Fake Movie');
        //$response->assertSee('Adventure, Drama, Mystery, Science Fiction, Thriller');
        $response->assertSee('Now Playing');
        $response->assertSee('Noqw Playing Fake Movie');

    }
}

private function fakePopularMovies(){
    return Http::response([
        "results" => [
            [
                "adult" => false,
                "backdrop_path" => "/H6j5smdpRqP9a8UnhWp6zfl0SC.jpg",
                "genre_ids" => [28, 878, 12],
                "id" => 565770,
                "original_language" => "en",
                "original_title" => "Fake Movie",
                "overview" => "Recent college grad Jaime Reyes returns home full of aspirations for his future, only to find that home is not quite as he left it. As he searches to find his purpose in the world, fate intervenes when Jaime unexpectedly finds himself in possession of an ancient relic of alien biotechnology: the Scarab.",
                "popularity" => 3538.632,
                "poster_path" => "/mXLOHHc1Zeuwsl4xYKjKh2280oL.jpg",
                "release_date" => "2023-08-16",
                "title" => "Fake Movie",
                "video" => false,
                "vote_average" => 7.1,
                "vote_count" => 863
            ],
        ],
    ], 200 );
}
