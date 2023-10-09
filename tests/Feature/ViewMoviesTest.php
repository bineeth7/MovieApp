<?php

namespace Tests\Feature;

use Livewire\Livewire;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewMoviesTest extends TestCase
{
    public function test_main_page_shows_correct_info()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
            'https://api.themoviedb.org/3/movie/now_playing' => $this->fakeNowPlayingMovies(),
            'https://api.themoviedb.org/3/genre/movie/list' => $this->fakeGenres(),
        ]);

        $response = $this->get(route('movies.index'));

        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
        //$response->assertSee('Fake Movie');
        $response->assertSee('Action, Science Fiction, Adventure');
        $response->assertSee('Now Playing');
        //$response->assertSee('Now Playing Fake Movie');

    }
// Search Dropdown
public function test_search_dropdown_works_correctly()
    {
        // Mocking the MovieDB API response for search query 'jumanji'
        Http::fake([
            'https://api.themoviedb.org/3/search/movie?query=jumanji' => $this->fakeSearchMovies(),
        ]);

        // Testing Livewire component 'search-dropdown'
        Livewire::test('search-dropdown')
            ->assertDontSee('Jumanji') // Asserting that 'Jumanji' is not initially visible
            ->set('search', 'Jumanji') // Setting the search term to 'Jumanji'
            ->assertSee('Jumanji'); // Asserting that 'Jumanji' is now visible
    }
    private function fakeSearchMovies()
    {
        return Http::response([
            'results' => [
                [
                    "adult" => false,
                    "backdrop_path" => "/pYw10zrqfkdm3yD9JTO6vEGQhKy.jpg",
                    "genre_ids" => [12, 14, 10751],
                    "id" => 8844,
                    "original_language" => "en",
                    "original_title" => "Jumanji",
                    "overview" => "When siblings Judy and Peter discover an enchanted board game that opens the door to a magical world, they unwittingly invite Alan -- an adult who's been trapped inside the game for 26 years -- into their living room. Alan's only hope for freedom is to finish the game, which proves risky as all three find themselves running from giant rhinoceroses, evil monkeys and other terrifying creatures.",
                    "popularity" => 18.597,
                    "poster_path" => "/vgpXmVaVyUL7GGiDeiK1mKEKzcX.jpg",
                    "release_date" => "1995-12-15",
                    "title" => "Jumanji",
                    "video" => false,
                    "vote_average" => 7.239,
                    "vote_count" => 9848,
                ],
            ],
        ], 200);
    }

// Search Dropdown end
//
    public function test_movie_page_shows_correct_info(){
        Http::fake([
            'https://api.themoviedb.org/3/movie/*' => $this->fakeSingleMovie(),
        ]);
        $response = $this->get(route('movies.show', 12345));
        $response->assertSee('Fake Turismo');
        $response->assertSee('Jeanne McCarthy');
        $response->assertSee('Smolder');

    }
    
//
    private function fakePopularMovies(){
        return Http::response([
            'result' => 
            [
                "adult" => false,
                "backdrop_path" => "/1syW9SNna38rSl9fnXwc9fP7POW.jpg",
                "genre_ids" => [28, 878, 12],
                "id" => 565770,
                "original_language" => "en",
                "original_title" => "Fake Movie",
                "overview" => "Recent college grad Jaime Reyes returns home full of aspirations for his future, only to find that home is not quite as he left it. As he searches to find his purpose in the world, fate intervenes when Jaime unexpectedly finds himself in possession of an ancient relic of alien biotechnology: the Scarab.",
                "popularity" => 2994.357,
                "poster_path" => "/mXLOHHc1Zeuwsl4xYKjKh2280oL.jpg",
                "release_date" => "2023-08-16",
                "title" => "Fake Movie",
                "video" => false,
                "vote_average" => 7.1,
                "vote_count" => 1019
            ]      
        ], 200);
    }

    private function fakeNowPlayingMovies(){
        return Http::response([
            'result' => [
                "adult" => false,
                "backdrop_path" => "/iiXliCeykkzmJ0Eg9RYJ7F2CWSz.jpg",
                "genre_ids" => [28, 9648, 53, 80],
                "id" => 762430,
                "original_language" => "en",
                "original_title" => "Now Playing Fake Movie",
                "overview" => "When a mysterious caller puts a bomb under his car seat, Matt Turner begins a high-speed chase across the city to complete a specific series of tasks. With his kids trapped in the back seat and a bomb that will explode if they get out of the car, a normal commute becomes a twisted game of life or death as Matt follows the stranger's increasingly dangerous instructions in a race against time to save his family.",
                "popularity" => 1547.22,
                "poster_path" => "/oUmmY7QWWn7OhKlcPOnirHJpP1F.jpg",
                "release_date" => "2023-08-23",
                "title" => "Now Playing Fake Movie",
                "video" => false,
                "vote_average" => 6.8,
                "vote_count" => 254
            ]
        ], 200);
    }

    private function fakeGenres(){
        return Http::response([
            'result' => [
                28 => "Action",
                12 => "Adventure",
                16 => "Animation",
                35 => "Comedy",
                80 => "Crime",
                99 => "Documentary",
                18 => "Drama",
                10751 => "Family",
                14 => "Fantasy",
                36 => "History",
                27 => "Horror",
                10402 => "Music",
                9648 => "Mystery",
                10749 => "Romance",
                878 => "Science Fiction",
                10770 => "TV Movie",
                53 => "Thriller",
                10752 => "War",
            ]
            
        ], 200);
    }

    public function fakeSingleMovie(){
        return Http::response([
            [
                "adult" => false,
                "backdrop_path" => "/jv4tiXAgaArMQo57jFMjvBEjmoa.jpg",
                "genre_ids" => [28, 18, 12],
                "id" => 980489,
                "original_language" => "en",
                "original_title" => "Gran Turismo",
                "overview" => "The ultimate wish-fulfillment tale of a teenage Gran Turismo player whose gaming skills won him a series of Nissan competitions to become an actual professional racecar driver.",
                "popularity" => 1914.709,
                "poster_path" => "/51tqzRtKMMZEYUpSYkrUE7v9ehm.jpg",
                "release_date" => "2023-08-09",
                "title" => "Fake Turismo",
                "video" => false,
                "vote_average" => 8,
                "vote_count" => 609,
                "credits" => [
                    "cast" => [
                        "cast_id" => 2,
                        "character" => "Smolder",
                        "name" => "Jeanne McCarthy",
                    ]
                ],
            ]
            
        ], 200);
    }

}
