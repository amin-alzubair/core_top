@extends('layouts.master')
@section('title','Checkout-page')
@section('content')

<div class="container-fluid">
    @if(session('success'))

    <div class="alert alert-success">{{sesion('message')}}</div>

    @endif
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-8  col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>تجديد</strong>
                        <small class="btn btn-danger btn-sm">اشتراك</small>
                    </div>
                    <div class="card-block">
                        <form action="{{route('ticket.approved',$ticket->id)}}" method="post">

                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="name"><strong>اسم الطالب</strong></label>
                                        <input type="text" value="{{$ticket->student_name}}" readonly name="student_name" class="form-control" id="name" placeholder="اسم الطالب" value="{{old('student_name')}}">

                                    </div>


                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="name"> <strong>رقم الهاتف</strong></label>
                                        <input type="text" value="{{$ticket->student_phone}}"  readonly name="student_phone" class="form-control" id="student_phone" placeholder=" ادخل رقم الهاتف" value="{{old('student_phone')}}">

                                    </div>


                                </div>


                            </div>
                            <!--/row-->

                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="plan"><strong>نوع الاشتراك</strong></label>
                                </div>

                                @foreach($plans as $plan)
                                <div class="col-sm-3">

                                    <div class="custom-control custom-radio">

                                        <input type="radio" id="customRadio1" value="{{$plan->id}}" name="plan" class="custom-control-input" @if($plan->id === $ticket->plan_id) checked @endif>
                                        <label class="custom-control-label" for="customRadio1">{{$plan->plan_name}}</label>
                                        ${{$plan->price}}
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button class="btn btn-success btn-xl form-control">تجديد</button>
                                    </div>
                                </div>
                            </div>


                            <!--////////////////////////////////////////////////////-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
