<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use App\Models\User;
use Livewire\Component;

class AddAgent extends Modal
{
    public $notAttachedAgent;
    public $url;

    public function showModal($data = null)
    {
        $agents = User::where('is_admin', false)->get();
        $ticket = Ticket::find($data);
        $this->url = route('agents.store', [$data]);
        $this->notAttachedAgent = $agents->diff($ticket->agents);
        $this->show = true;
    }

    public function render()
    {
        return view('livewire.add-agent');
    }
}
