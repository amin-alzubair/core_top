<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTicket;
use Illuminate\Foundation\Http\FormRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Plan;
use Carbon\Carbon;

class TicketController extends Controller
{

    public function create()
    {
        $tickets = Ticket::orderBy('stauts', 'desc')->paginate(5);
        $plans = Plan::select('id', 'plan_name', 'price')->get();
        return view('tickets.create_ticket', compact('tickets', 'plans'));
    }

    public function stauts(Ticket $ticket)
    {

        return view('tickets.ticket_stauts', compact('ticket'));
    }
    public function checkout(Ticket $ticket)
    {
        $plans = Plan::all();
        return view('tickets.ticket-checkout', compact('ticket','plans'));
    }

    //store new tickets
    public function store(StoreTicket $request)
    {
        if($request->plan == 1){
            $exipred_at = Carbon::now()->addWeek()->toDateTimeString();
        } elseif ($request->plan == 2) {
            $exipred_at = Carbon::now()->addMonth()->toDateTimeString();
        } else {
            $exipred_at = Carbon::now()->addYear()->toDateTimeString();
        }
        $ticket = Ticket::create([
            'student_name'  => $request->student_name,
            'student_phone'  => $request->student_phone,
            'plan_id'        => $request->plan,
            'exipred_at'    => $exipred_at
        ]);
        return redirect(route('ticket.checkout', $ticket));
    }

    public function approved(Ticket $ticket)
    {
        $exipred_at = '';
        switch(request('plan')){
              case 1:
                $exipred_at=Carbon::now()->addWeek()->toDateTimeString();
                break;
            case 2 :
                $exipred_at=Carbon::now()->addMonth()->toDateTimeString();
                break;
            default:
            $exipred_at = Carbon::now()->addYear()->toDateTimeString();
        }
        $ticket->update([
            'stauts' => 1,
            'exipred_at'=>$exipred_at,
            'plan_id'=>request('plan')
        ]);

        return back();
    }
}
