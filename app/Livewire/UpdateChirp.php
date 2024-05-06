<?php

namespace App\Livewire;

use App\Models\Chirp;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Symfony\Component\HttpFoundation\Request;

class UpdateChirp extends Component
{
    #[Validate('required', message: 'Per favore inserisci un titolo')]
    #[Validate('min:8', message: 'Il titolo che hai inserito è troppo corto')]
     public $title;


    #[Validate('min:5', message: "Il corpo dell'chirp che hai inserito è troppo corto")]
     public $content;        
     
    public $chirp;

    public function mount(){
        $this->title = $this->chirp->title;
        $this->content = $this->chirp->content;

    }

    public function updateChirp(){
        $this->chirp->update([
            "title"=>$this->title,
            "content"=>$this->content,
        ]);
        $this->reset();
        session()->flash('message', 'Chirp modificato con successo');

    }
    public function render()
    {
        
        return view('livewire.update-chirp');
    }
}
