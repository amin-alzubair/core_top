<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpenseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'point'=>'required',
            'price'=>'required',
        ];
    }
    public function messages(){
        return [
            'point.required'=>'عزرا يجب ان لا يكون البند فارغا '
        ];
    }
    public function attributes(){
        return [
            'point'=>'البند'
        ];
    }
}
