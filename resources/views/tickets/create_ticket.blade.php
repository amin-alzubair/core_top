@extends('layouts.master')

@section('title','Ticket List')
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
                        <strong>اضافة</strong>
                        <small class="btn btn-danger btn-sm">اشتراك</small>
                    </div>
                    <div class="card-block">
                        <form action="{{route('ticket.store')}}" method="post">

                            @csrf
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="name"><strong>اسم الطالب</strong></label>
                                        <input type="text" name="student_name" class="form-control" id="name" placeholder="اسم الطالب" value="{{old('student_name')}}">

                                    </div>


                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="name"> <strong>رقم الهاتف</strong></label>
                                        <input type="text" name="student_phone" class="form-control" id="student_phone" placeholder=" ادخل رقم الهاتف" value="{{old('student_phone')}}">

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
                                        <input type="radio" id="customRadio1" value="{{$plan->id}}" name="plan" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">{{$plan->plan_name}}</label>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button class="btn btn-success btn-xl form-control">اشتراك</button>
                                    </div>
                                </div>
                            </div>


                            <!--////////////////////////////////////////////////////-->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8 col-lg-12  d-flex justify-content-center">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> الاشتراك
                    </div>
                    <div class="card-block">
                        <table class="table table-striped">

                            <div class="input-group m-b-1">
                                <span class="input-group-addon"><i class="icon-search"></i>
                                </span>
                                <input type="text" class="form-control" name="search" placeholder="ادخل رقم البطاقة" id="search">
                            </div>
                            <thead class="bg-primary">
                                <tr>
                                    <th>اسم الطالب</th>
                                    <th>رقم الهاتف</th>
                                    <th>رقم البطاقة</th>
                                    <th>تاريخ انتهاء الاشتراك</th>
                                    <th>نوع الاشتراك</th>
                                    <th>حالة الاشتراك</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tickets as $ticket)
                                <tr>
                                    <th>{{$ticket->student_name}}</th>
                                    <th>{{$ticket->student_phone}}</th>
                                    <th>{{$ticket->id}}</th>
                                    <th>{{$ticket->exipred_at ?$ticket->exipred_at : 'منتهي' }}</th>
                                    <th>{{$ticket->plan->plan_name}}</th>
                                    <th><a href="{{route('ticket.stauts',$ticket->id)}}">{{$ticket->stauts}}</a></th>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <ul class="">
                    <li>{{$tickets->links()}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#search').on('keyup', function() {
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: "{{route('search')}}",
            data: {
                'search': $value
            },
            success: function(data) {
                $('tbody').html(data);
            }
        });
    })
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
</script>
@endsection
