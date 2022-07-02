<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }
    public function messages(){

        return [
            'name.required'=>'اسم الموظف مطلوب',
            'email.required'=>'ادخل البريد الاكتروني',
            'email.emai'=>'ادخل البريد الاكتروني  صحيحا',
            'email.unique'=>' البريد الاكتروني موجود مسبقا  ',
            'password.required'=>'ادخل كلمة المرور',
            'password.confirmed'=>'كلمة المرور غير مطابقة',
        ];
    }
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|confirmed',
        ];
    }
}
