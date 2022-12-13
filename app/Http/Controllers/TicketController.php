<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTicket;
use Illuminate\Foundation\Http\FormRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Plan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        return view('tickets.ticket-checkout', compact('ticket', 'plans'));
    }

    //store new tickets
    public function store(StoreTicket $request)
    {
        if ($request->plan == 1) {
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
        switch (request('plan')) {
            case 1:
                $exipred_at = Carbon::now()->addWeek()->toDateTimeString();
                break;
            case 2:
                $exipred_at = Carbon::now()->addMonth()->toDateTimeString();
                break;
            default:
                $exipred_at = Carbon::now()->addYear()->toDateTimeString();
        }
        $ticket->update([
            'stauts' => 1,
            'exipred_at' => $exipred_at,
            'plan_id' => request('plan')
        ]);

        return redirect(route('ticket.create'))->with('toast_success', 'تم تفعيل الحساب');
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = " ";

            $ticket = Ticket::where('id', 'LIKE', '%' . $request->search . "%")->get();

            foreach ($ticket as $key => $ti) {
                $output .= '<tr>' .
                    '<td>' . $ti->student_name . '</td>' .
                    '<td>' . $ti->student_phone . '</td>' .
                    '<td>' . $ti->id . '</td>' .
                    '<td>' . $ti->created_at . '</td>' .
                    '<td>' . $ti->plan->plan_name . '</td>' .
                    '<td>'."<a href='/ticket-stauts/{$ti->id}'>" . $ti->stauts ."</a>".'</td>' .

                    '</tr>';
            }
        }

        return Response($output);
    }
}
