@extends('layouts.master')
@section('title', 'Create plan')

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
                        <strong>تعديل</strong>
                        <small class="btn btn-danger btn-sm">خطة جديدة</small>
                    </div>
                    <div class="card-block">
                        <form action="{{route('plans.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="name"><strong>اسم الاشتراك</strong></label>
                                        <input type="text" name="plan_name" class="form-control" id="plan_name" placeholder="اسم الاشتراك"  value="{{old('plan_name')}}">

                                    </div>


                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="name"> <strong> سعر الاشتراك</strong></label>
                                        <input type="text" name="price" class="form-control" id="price" placeholder="ادخل سعر الاشتراك" value="{{old('price')}}">

                                    </div>


                                </div>


                            </div>
                            <!--/row-->


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button class="btn btn-success btn-xl form-control">اضفافة</button>
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
