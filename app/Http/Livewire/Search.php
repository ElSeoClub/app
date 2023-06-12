<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{

    public string $search = '';

    protected array $rules = [
        'search' => ''
    ];

    public function searchUpdate(){
        dd('test');
    }

    public function render()
    {
        return view('livewire.search');
    }
}
