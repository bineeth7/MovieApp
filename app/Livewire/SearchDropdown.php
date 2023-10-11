<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class SearchDropdown extends Component
{
    public $search = '';

    public function render()
    {
        $apiKey = env('TMDB_API_KEY');
        $searchResults = [];

        if (strlen($this->search) >= 2) {
            $searchResults = Http::get("https://api.themoviedb.org/3/search/movie?query={$this->search}&api_key={$apiKey}")->json();
        }
        //dump($searchResults);
        
        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7),
        ]);
    }
}
