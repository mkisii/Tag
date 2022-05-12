<?php

namespace App\Http\Livewire\Tags;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Tag;

class Index extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $orderBy ='id';
    public $search = '';
    public $orderAsc = true;
    


    protected $listeners = ['saved' =>'$refresh']; 


    public function render()
    {
        return view('livewire.tags.index', [
            'tags' => Tag::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate($this->perPage)

        ]);
    }
}
