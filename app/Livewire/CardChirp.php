<?php

namespace App\Livewire;

use App\Models\Chirp;
use Livewire\Component;

class CardChirp extends Component
{
    public function destroy(Chirp $chirp){
        $chirp->delete();
    }

    public function render()
    {
        $chirps = Chirp::all();
        return view('livewire.card-chirp', compact('chirps'));
    }

}
