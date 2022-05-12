<?php

namespace App\Rules;


namespace App\Http\Livewire\Tags;
use Illuminate\Support\Facades\Validator\Rule;


use Livewire\Component;
use App\Models\Tag;


class Edit extends Component
{
    public $tag;
    // public $formId;

    public function mount()
    {
        // $this->formId = $tag->id();
        // $this->tag = Tag::all();

    }

    protected $rules = [

        'tag.name' => ['required', 'unique:tags,name', 'max:10'],
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }



    public function updateTagData()
    {

        $this->tag->update([
            'name' => $this->tag->name,

        ]);

        $this->emit('saved');
        $this->reset();  

    
    }

    public function render()
    {
        return view('livewire.tags.edit');
    }
}
