<?php

namespace App\Http\Livewire\Tags;

use Livewire\Component;
use App\Models\Tag;

class Delete extends Component
{
    public $tag;

    public function mount()
    {

    }

    public function deleteTagData()
    {
        
        $this->tag->delete([
            'name' => $this->tag->name,
        ]);

        $this->emit('saved');


    }

    public function render()
    {
       
        
        return view('livewire.tags.delete');
        
    }
}
