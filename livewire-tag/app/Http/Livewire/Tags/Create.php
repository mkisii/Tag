<?php

namespace App\Http\Livewire\Tags;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Tag;

class Create extends Component
{

    public $name;
    public $slug;

    protected $rules = [
        'name' => ['required', 'unique:tags,name', 'min:2', 'max:10']
        // 'slug' => ['required', 'slug']
    ];

    public function storeTagData() 
    {

        $tag = new Tag();

        $tag->name= $this->name;
        $tag->slug = Str::slug($this->name);

        $tag->save();  
        // dd($tag);   

        session()->flash('success', 'New Tag Created! Successfully');

        $this->reset();


    }


    public function render()
    {
        return view('livewire.tags.create');
    }
}
