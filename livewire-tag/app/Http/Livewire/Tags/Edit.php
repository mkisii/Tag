<?php

namespace App\Rules;


namespace App\Http\Livewire\Tags;
use Illuminate\Support\Facades\Validator\Rule;


use Livewire\Component;
use App\Models\Tag;


class Edit extends Component
{

    public function render()
    {
        return view('livewire.tags.edit');
    }
}
