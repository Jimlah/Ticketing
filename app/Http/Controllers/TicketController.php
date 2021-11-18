<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Priority;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $tickets = Ticket::when($request->sub_category, function ($query, $category) {
            $query->where('sub_category_id', 'like', '%' . $category . '%');
        })
            ->when($request->priority, function ($query, $priority) {
                $query->where('priority_id', 'like', '%' . $priority . '%');
            })
            ->when($request->search, function ($query, $search) {
                $query->where('subject', 'like', '%' . $search . '%');
            })
            ->latest()->paginate(10);

        $categories = Category::all();
        $priorities = Priority::all();

        return view('dashboards.tickets.index', compact('tickets', 'categories', 'priorities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $priorities = Priority::all();

        return view('dashboards.tickets.create', compact('categories', 'priorities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketRequest $request)
    {
        $customer = Customer::firstOrCreate(
            [
                'phone' => $request->phone,
            ],
            [
                'name' => $request->name,
                'email' => $request->email,
            ]
        );

        $customer->tickets()->create([
            'subject' => $request->subject,
            'content' => $request->content,
            'admin_id' => auth()->id(),
            'sub_category_id' => $request->sub_category_id,
            'priority_id' => $request->priority_id,
        ]);

        return redirect()->to(route('tickets.index'))->with('success', 'Ticket created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('dashboards.tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        $categories = Category::all();
        $priorities = Priority::all();

        return view('dashboards.tickets.edit', compact('ticket', 'categories', 'priorities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(TicketRequest $request, Ticket $ticket)
    {
        $ticket->isOpen()->update([
            'subject' => $request->subject,
            'content' => $request->content,
            'sub_category_id' => $request->category_id,
            'priority_id' => $request->priority_id,
        ]);

        return redirect()->to(route('tickets.index'))->with('success', 'Ticket updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->isOpen()->delete();

        return redirect()->to(route('tickets.index'))->with('success', 'Ticket deleted successfully');
    }
}
