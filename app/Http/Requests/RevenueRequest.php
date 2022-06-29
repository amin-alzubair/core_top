<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RevenueRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    
    public function messages(){
        return [
            'point.required'=>'اكتب البند اولا',
            'price.required'=>'يجيب عليك ادخال القيمة',
        ];
    }
    public function rules()
    {
        return [
            'point'=>'required',
            'price'=>'required',
        ];
        
    }
}
