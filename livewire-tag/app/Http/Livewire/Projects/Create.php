<?php

namespace App\Http\Livewire\Projects;
use Illuminate\Http\Request;

use config;

use Livewire\Component;
use App\Models\Project;
use App\Models\Tag;

class Create extends Component
{

    public $name;
    public $type;
    public $version;
    public $tag_id;

    public function mount()
    {
        $tag = Tag::all();
    }



    public function storeProjectData()
    {
        

        $project = new Project();

        $project->name = $this->name;
        $project->version =$this->version;
        $project->type = $this->type;
        $project->tag_id =$this->tag_id;
        $project->user_id = auth()->user()->id;

        // dd($project);
        $project->save();

    }

    public function render()
    {
        return view('livewire.projects.create',[ 'tags' => Tag::all()]);
    }
}
