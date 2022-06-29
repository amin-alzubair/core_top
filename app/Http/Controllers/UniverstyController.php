<?php

namespace App\Http\Controllers;

use App\Universty;
use Illuminate\Http\Request;
use App\Http\Requests\UniversityRequest;

class UniverstyController extends Controller
{
    //create and retrive universtyes
    public function create()
    {
        $universty=Universty::select('id','university')->paginate(5);
      return view('university.add_new_university',compact('universty'));
    }

    //store universty
    public function store(UniversityRequest $request)
    {
        Universty::create($request->all());
        return back()->with('toast_success','تمت اضافة جامعة جديدة');
    }

}
