<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Requests\DepartmentRequest;

class DepartmentController extends Controller
{
    public function create()
    {
        $departments=Department::paginate(5);
        return view('department.add_new_department',compact('departments'));
    }
    //store new department
    public function store(DepartmentRequest $request)
    {
        Department::create($request->all());
        return back()->with('toast_success','تمت اضافة قسم جديد');
    }

    
    
    
}
