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

private function fakeGenres(){
    return Http::response([
        "genres" => [
            [
                "id" => 28,
                "name" => "Action"
            ],
            [
                "id" => 12,
                "name" => "Adventure"
            ],
            [
                "id" => 16,
                "name" => "Animation"
            ],
            [
                "id" => 35,
                "name" => "Comedy"
            ],
            [
                "id" => 80,
                "name" => "Crime"
            ],
            [
                "id" => 99,
                "name" => "Documentary"
            ],
            [
                "id" => 18,
                "name" => "Drama"
            ],
            [
                "id" => 10751,
                "name" => "Family"
            ],
            [
                "id" => 14,
                "name" => "Fantasy"
            ],
            [
                "id" => 36,
                "name" => "History"
            ],
            [
                "id" => 27,
                "name" => "Horror"
            ],
            [
                "id" => 10402,
                "name" => "Music"
            ],
            [
                "id" => 9648,
                "name" => "Mystery"
            ],
            [
                "id" => 10749,
                "name" => "Romance"
            ],
            [
                "id" => 878,
                "name" => "Science Fiction"
            ],
            [
                "id" => 10770,
                "name" => "TV Movie"
            ],
            [
                "id" => 53,
                "name" => "Thriller"
            ],
            [
                "id" => 10752,
                "name" => "War"
            ],
            [
                "id" => 37,
                "name" => "Western"
            ]
        ]
    ], 200);
}

private function fakeSingleMovie(){
    return Http::response([
        "title" => "Fake Jumanji",
        "overview" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vestibulum velit vel est tristique, in cursus ligula egestas. Ut id arcu eu massa tincidunt elementum. Nunc nec orci auctor, pulvinar nibh eu, ultrices arcu. Sed ut sem vitae est commodo suscipit.",
        "runtime" => 120,
        "release_date" => "2023-09-15",
        "genres" => [
            [
                "id" => 28,
                "name" => "Action"
            ],
            [
                "id" => 12,
                "name" => "Adventure"
            ],
            [
                "id" => 14,
                "name" => "Fantasy"
            ]
        ],
        "cast" => [
            [
                "name" => "Dwayne Johnson",
                "character" => "Lead Role"
            ],
            [
                "name" => "Emily Blunt",
                "character" => "Supporting Role"
            ]
        ],
        "crew" => [
            [
                "name" => "Jeanne McCarthy",
                "job" => "Casting Director"
            ],
            [
                "name" => "John Doe",
                "job" => "Director"
            ]
        ]
    ], 200);
}



}