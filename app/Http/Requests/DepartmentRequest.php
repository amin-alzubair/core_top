<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }
     public function messages(){
         return[
             'department.required'=>'ادخل اسم القسم الذي تريد اضافته',
             'department.unique'=>'هذا القسم مضاف مسبقا'
         ];
     }
    public function rules()
    {
        return [
            'department'=>'required|unique:departments',
            
        ];
    }
}
