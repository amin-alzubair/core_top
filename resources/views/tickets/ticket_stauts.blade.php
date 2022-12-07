@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-block p-4">
            <h4 class="card-title">{{$ticket->student_name}}</h4>
            <p class="card-text">
            <div class="">
                <b>رقم الهاتف</b>
                <div>{{$ticket->student_phone}}</div>
            </div>
            <div class="">
                <b> نوع الاشتراك</b>
                <div>{{$ticket->plan->plan_name}}</div>
            </div>
            <div class="">
                <b> تاريخ الانتهاء</b>
                <div>{{$ticket->exipred_at}}</div>
            </div>

            </p>
            <b>الحالة</b>
            @if($ticket->stauts ===0)
            <a href="{{route('ticket.approved',$ticket->id)}}" class="btn btn-primary">تفعيل</a>
            @else
            مفعل
            @endif
        </div>
    </div>
</div>

@endsection
