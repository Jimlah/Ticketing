<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddAgentToTicket extends Component
{

    protected $listeners = [
        'addAgentToTicket' => 'addAgentToTicket',
    ];

    public function addAgentToTicket()
    {
        dd('addAgentToTicket');
    }

    public function render()
    {
        return view('livewire.add-agent-to-ticket');
    }
}
