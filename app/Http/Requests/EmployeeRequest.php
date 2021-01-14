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
            'employee_name.required'=>'اسم الموظف مطلوب'
        ];
    }
    public function rules()
    {
        return [
            'employee_name'=>'required',
        ];
    }
}
