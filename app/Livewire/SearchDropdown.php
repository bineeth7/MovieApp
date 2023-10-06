<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = 'he';

    public function render()
    {
        return view('livewire.search-dropdown');
    }
}
