@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-block">
            <div class="flex"><strong>رقم البطاقة :{{$ticket->id}}</strong></div>
            <div>الاسم : <strong>{{$ticket->student_name}}</strong></div>
            <div>رقم الهاتف: <strong>{{$ticket->student_phone}}</strong></div>
            <div>نوع الاشتراك : <strong>{{$ticket->plan->plan_name}}</strong></div>
            <div>تاريخ الاشتراك:<strong>{{$ticket->created_at->format('Y-m-d')}}</strong></div>
            <div> القيمة المدفوعة:<strong>${{$ticket->plan->price}}</strong></div>
            <div>حالة الاشتراك : <strong>{{$ticket->stauts ? 'مفعل': 'غير مفعل'}}</strong></div>
        </div>
        @if($ticket->stauts === 0)
        <div class="mr-10"><a href="{{route('ticket.approved',$ticket->id)}}">تفعيل</a></div>
        @endif
    </div>
</div>

@endsection
