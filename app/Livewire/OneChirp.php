<?php

namespace App\Livewire;

use Livewire\Component;

class OneChirp extends Component
{
    public $chirp;

    public function render()
    {
        return view('livewire.one-chirp');
    }
}
