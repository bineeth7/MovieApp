<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = 'hello there';
    public function render()
    {
        $searchResults = [];

        if ($this->search) {
            $apiKey = env('TMDB_API_KEY');
            $searchResults = Http::get("https://api.themoviedb.org/3/search/movie?query={$this->search}&api_key={$apiKey}")
                ->json()['results'];
        }
        dump($searchResults);
        return view('livewire.search-dropdown', [
            'searchResults' => $searchResults
        ]);
    }
}
