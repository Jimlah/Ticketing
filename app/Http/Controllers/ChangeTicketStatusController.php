<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class ChangeTicketStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Ticket $ticket)
    {
        if (!$ticket->closed_at) {
            $ticket->closed_at = now();
            $ticket->save();
            return redirect()->to(route('tickets.show', $ticket->id))->with('success', 'Ticket closed');
        }

        return redirect()->to(route('tickets.show', $ticket->id))->with('warning', 'Ticket already closed');
    }
}
