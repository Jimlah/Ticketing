<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $tickets = Ticket::all();
        $customers = Customer::all();
        $users = User::all();

        return view('dashboard', compact('tickets', 'customers', 'users'));
    }
}
