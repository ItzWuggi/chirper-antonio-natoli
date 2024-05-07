<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Chirp;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateChirp extends Component
{   #[Validate('required', message: 'Per favore inserisci un titolo')]
    #[Validate('min:8', message: 'Il titolo che hai inserito è troppo corto')]
     public $title;

    #[Validate('min:5', message: "Il contenuto del chirp che hai inserito è troppo corto")]
     public $content;  

    #[Validate('required|regex:/^(\w+)(,\s*\w+)*$/', message: 'Inserisci la virgola dopo ogni tag')]
     public $tags;

   
     
    public function store()
    {
        $this->validate();

        $chirp = Chirp::create([
            'title'=>$this->title,
            'content'=>$this->content,
            "user_id"=>Auth::user()->id, 

        ]);
    
        $arrayTags = explode(',' , $this->tags);
        foreach ($arrayTags as $tag) {
            $createTag = Tag::updateOrCreate([
                "tag"=>$tag
            ]);            
            $chirp->tags()->attach($createTag);
        }




        

        $this->reset();
        
        session()->flash('message', 'Chirp inserito con successo');
        
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
