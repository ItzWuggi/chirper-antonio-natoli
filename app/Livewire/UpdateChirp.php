<?php

namespace App\Livewire;

use App\Models\Chirp;
use App\Models\Tag;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Symfony\Component\HttpFoundation\Request;

class UpdateChirp extends Component
{
    #[Validate('required', message: 'Per favore inserisci un titolo')]
    #[Validate('min:8', message: 'Il titolo che hai inserito è troppo corto')]
     public $title;


    #[Validate('min:5', message: "Il corpo del chirp che hai inserito è troppo corto")]
     public $content;        
     
    public $chirp;

    public $tags = '';
    // public $chirpTag;

    public function mount(){
        $this->title = $this->chirp->title;
        $this->content = $this->chirp->content;
        foreach ($this->chirp->tags as $tag) {
            $this->tags= $this->tags .  $tag->tag .',';
        }
    }


    public function updateChirp(){
        $this->chirp->update([
            "title"=>$this->title,
            "content"=>$this->content,
        ]);
        $this->chirp->tags()->detach();
        $arrayTags = explode(',' , $this->tags);
        foreach ($arrayTags as $tag) {
            $createTag = Tag::updateOrCreate([
                "tag"=>$tag
            ]);            
            $this->chirp->tags()->attach($createTag);
        }

        $this->reset();
        session()->flash('message', 'Chirp modificato con successo');

    }
    public function render()
    {
        
        return view('livewire.update-chirp');
    }
}
