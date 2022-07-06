<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use App\Mail\WelcomeNewEmployee;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    //create employee
    public function create()
    {
        $employee=User::all();
        return view('employees.add_employee',compact('employee'));
    }

    //store new employee
    public function store(EmployeeRequest $request)
    {
        $data = $request->validated();
        $data['password']=Hash::make($data['password']);
       $user = User::create($data);

       Mail::to($user->email)->queue(new WelcomeNewEmployee());

       return back()->with('toast_success','تمت اضافة موظفة بنجاح');
    }

    //destroy employee
    public function destroy(User $employee)
    {
        $employee->delete();

        return back()->with('toast_success','تم حذف الموظف بنجاح');
    }

    public function setAdmin(){
        User::where('id',request('user_id'))->update([
            'isAdmin'=>request('isAdmin')
        ]);

        return response()->json(['message'=>'تم تغير حالة المستخدم']);
    }
}
