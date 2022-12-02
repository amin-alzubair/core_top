<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicket extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'student_name'=>'required|min:4|string',
            'plan'=>'required',
            'student_phone'=>'',
        ];
    }
    public function messages(){
        return [
            'student_name.required'=>'اسم الطالب لا يمكن ان يكون فارغا',
            'gender.required'=>'يجب تحديد الجنس',
            'price.required'=>'اكتب القيمة',
            'input_depa.required'=>'اختار القسم',
            'input_unev.required'=>'اختار اسم الجامعة',
            'note.required'=>'اكتب الملاحظات'
        ];
    }
}
