<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    //create employee
    public function create()
    {
        $employee=Employee::all();
        return view('employees.add_employee',compact('employee'));
    }

    //store new employee
    public function store(EmployeeRequest $request)
    {
       Employee::create($request->all());

       return back()->with('toast_success','تمت اضافة موظفة بنجاح');
    }

    //destroy employee
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return back();
    }
}
