<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StatusButton extends Component
{
    public $ticket;
    public $show = false;
    public $showAlert = false;

    public function mount($ticket)
    {
        $this->ticket = $ticket;
    }

    public function showAlert()
    {
        $this->showAlert = true;
    }

    public function closeAlert()
    {
        $this->showAlert = false;
    }

    public function dropdown()
    {
        $this->show = !$this->show;
    }

    public function render()
    {
        return view('livewire.status-button');
    }
}
