<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Chirp;
use Livewire\Component;

class CardChirp extends Component
{
    public function destroy(Chirp $chirp){
        $chirp->tags()->detach();
        $chirp->delete();
    }

    public function render()
    {
        $chirps = Chirp::all();
        $tags = Tag::all();

        return view('livewire.card-chirp', compact('chirps', 'tags'));
    }

}
