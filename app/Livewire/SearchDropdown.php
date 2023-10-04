<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = '';

    public function render()
    {
        $searchResults = [];

        if (!empty($this->search)) {
            $apiKey = env('TMDB_API_KEY');
            $response = Http::get("https://api.themoviedb.org/3/search/movie?query={$this->search}&api_key={$apiKey}");
            $searchResults = $response->json()['results'];
        }

        return view('livewire.search-dropdown', ['searchResults' => $searchResults]);
    }
}
