<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Http\Requests\ExpenseRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{

    //create expense
    public function create()
    {
        $expenses = Expense::all();
        $employees = User::select('id', 'name')->get();
        return view('expense.add_expense', compact('employees', 'expenses'));
    }
    //store new expense
    public function store(ExpenseRequest $request)
    {
        Auth::user()->expense()->create($request->all());
        return back()->with('toast_success', 'تمت اضافة المنصرف');
    }
}
