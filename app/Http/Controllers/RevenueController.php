<?php

namespace App\Http\Controllers;

use App\Revenue;
use Illuminate\Http\Request;
use App\Http\Requests\RevenueRequest;
use App\Employee;
class RevenueController extends Controller
{
    //create revenue
    public function create()
    {
        $employees=Employee::select('id','employee_name')->get();
        $revenues=Revenue::paginate(4);
        return view('revenue.add_revenue',compact('revenues','employees'));
    }

    //store new revenue
    public function store(RevenueRequest $request)
    {
        Revenue::create($request->all());
        return back()->with('toast_success','تمت اضافة وارد بنجاح');
    }

}
