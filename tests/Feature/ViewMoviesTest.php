<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_main_page_shows_correct_info()
    {
        $response = $this->get(route('movies.index'));
        $response->assertSuccessful();

        $response->assertSee("Popular Movies");
    }
}
