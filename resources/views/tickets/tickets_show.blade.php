@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="animated fadeIn">
<div class="row">

<div class="col-lg-8  d-flex justify-content-center">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> التذاكر
        </div>
        <div class="card-block">
            <table class="table table-striped">
                <thead class="bg-primary">
                    <tr>
                        <th>اسم الطالب</th>
                        <th>تاريخ التذكرة</th>
                        <th>الجامعة</th>
                        <th>التخصص</th>
                        <th>القيمة المدفوعة</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tickets as $ticket)
                    <tr>
                     <th>{{$ticket->student_name}}</th>
                     <th>{{$ticket->created_at->format('Y-M-D-d')}}</th>
                      <th>{{$ticket->universty->university}}</th>
                     <th>{{$ticket->department->department}}</th>
                     <th>{{$ticket->bound.'ج'}}</th>
                     
                     
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <ul class="pagination">
                
                <li>{{$tickets->links()}}</li>
            </ul>
        </div>
    </div>
</div>
<!--/col-->

</div>
</div>

@endsection