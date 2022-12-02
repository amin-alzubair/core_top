<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTicket;
use Illuminate\Foundation\Http\FormRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Plan;

class TicketController extends Controller
{

    public function create()
    {
        $tickets = Ticket::orderBy('stauts', 'desc')->paginate(5);
        $plans = Plan::select('id', 'plan_name', 'price')->get();
        return view('tickets.create_ticket', compact('tickets', 'plans'));
    }

    public function checkout(Ticket $ticket)
    {
        return view('tickets.ticket_checkout', compact('ticket'));
    }

    //store new tickets
    public function store(StoreTicket $request)
    {
        //dd($request->all());
        $ticket = Ticket::create([
            'student_name'  => $request->student_name,
            'student_phone'  => $request->student_phone,
            'plan_id'        => $request->plan
        ]);
        return redirect(route('ticket.checkout', $ticket));
    }

    public function approved(Ticket $ticket)
    {
        $ticket->update([
            'stauts' => 1
        ]);

        return back();
    }
}
