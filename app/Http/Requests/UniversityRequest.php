<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UniversityRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function messages(){
        return[
            'university.required'=>'اسم الجامعة مطلوب',
            'university.string'=>'المدخل يجيب ان يكون حروف',
            'university.unique'=>'الاسم موجود مسبقا',
            'university.min'=>'يجب ان يتكون الاسم من ثلاثة حروف علي الاقل',
            'university.regex'=>'الاسم يجب ان يحتوي علي الحروف العربية فقط'
        ];
    }
    public function rules()
    {
        return [
            'university'=>'required|string|min:3|unique:universties|regex:/\p{Arabic}/u',
        ];
    }
}
