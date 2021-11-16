<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $data = null;
    public $show = false;

    protected $listeners = ['show' => 'showModal'];



    public function showModal($data = null)
    {
        $this->data = $data;
        $this->show = true;
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
