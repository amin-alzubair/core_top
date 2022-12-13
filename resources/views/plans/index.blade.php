@extends('layouts.master')
@section('title', 'Plan List')
@section('content')

<div class="container-fluid">
    @if(session('success'))

    <div class="alert alert-success">{{sesion('message')}}</div>

    @endif
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-8 col-lg-12  d-flex justify-content-center">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> <a href="{{route('plans.create')}}">خطة جديدة</a>
                    </div>
                    <div class="card-block">
                        <table class="table table-striped">
                            <thead class="bg-primary">
                                <tr>
                                    <th>ID </th>
                                    <th> اسم الخطة</th>
                                    <th> السعر</th>
                                    <th> العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($plans as $plan)
                                <tr>
                                    <th>{{$plan->id}}</th>
                                    <th>{{$plan->plan_name}}</th>
                                    <th>${{$plan->price}}</th>
                                    <th>
                                        <a href="{{route('plans.edit',$plan->id)}}">تعديل</a>
                                        <form action="{{route('plans.destroy',$plan->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">حذف</button>
                                        </form>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
