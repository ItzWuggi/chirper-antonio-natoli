<?php

namespace App\Livewire;

use App\Models\Chirp;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateChirp extends Component
{   #[Validate('required', message: 'Per favore inserisci un titolo')]
    #[Validate('min:8', message: 'Il titolo che hai inserito è troppo corto')]
     public $title;

    #[Validate('min:5', message: "Il contenuto del chirp che hai inserito è troppo corto")]
     public $content;        
     
    public function store()
    {
        $this->validate();

        Chirp::create([
            'title'=>$this->title,
            'content'=>$this->content

        ]);

        $this->reset();

        session()->flash('status', 'Chirp inserito con successo');
    }
    protected function clearForm(){
        $this->title='';
        $this->content='';

    }

    public function render()
    {
        return view('livewire.create-chirp');
    }
}
