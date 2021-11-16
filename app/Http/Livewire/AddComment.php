<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddComment extends Component
{
    public $url;
    public $show = false;

    public function showComment()
    {
        $this->show = true;
    }


    public function render()
    {
        return view('livewire.add-comment');
    }
}
