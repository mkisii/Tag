<?php

namespace App\Http\Livewire\Projects;

use Livewire\WithPagination;
use App\Models\Project;
use App\Models\Tag;
use Livewire\Component;

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
        

        return view('livewire.projects.index', [
            'projects' => Project::all(),
        ]);

    }
}


    




    
