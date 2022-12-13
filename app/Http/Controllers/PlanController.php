<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::select('id', 'plan_name', 'price')->get();

        return view('plans.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'plan_name' => 'required',
            'price'     => 'required'
        ]);

        Plan::create($data);

        return back()->with('toast_success', 'تمت اضافة خطة جديدة');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        $plan = ['name'=>$plan->plan_name, 'price'=>$plan->price, 'id'=>$plan->id];
        return view('plans.edit', compact('plan'));
    }
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        $data = $request->validate([
            'plan_name'  => 'required',
            'price'      => 'required'
        ]);
        $plan->update($data);

        return back()->with('toast_success', 'تم التحديث بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {

        Plan::destroy($plan->id);

        return back()->with('toast_success', 'تم الحذف بنجاح');
    }
}
