<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //hom page
    public function index()
    {
        $ticket = \App\Ticket::all();
        $employee = \App\User::all();
        return view('home', compact('ticket', 'employee'));
    }
}
