<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTicket;
use Illuminate\Foundation\Http\FormRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Universty;
use App\Department;
class TicketController extends Controller
{
    //dispaly all tickets
    public function index()
    {
        $tickets=Ticket::orderBy('created_at','desc')->paginate(5);
        return view('tickets.tickets_show',compact('tickets'));
    }

    //create tickets
    public function create()
    {
        $universty=Universty::all();
        $depart=Department::all();
        return view('tickets.create_ticket',compact('universty','depart'));
    }

   //store new tickets
    public function store(StoreTicket $request)
    {
        Ticket::create([
            'student_name'  =>$request->student_name,
            'university_id'  =>$request->input_unev,
            'department_id' =>$request->input_depa,
            'gender_id'     =>$request->gender,
            'bound'         =>$request->price,
            'note'          =>$request->note,
        ]);
        return back()->with('toast_success',' تمت اضافة تذكرة جديدة');
    }
}
