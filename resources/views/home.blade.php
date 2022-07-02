
@extends('layouts.master')
@section('title','dashboard')
@section('content')
<div class="container-fluid">
    <div class="animate fadeIn">
    <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <a href="{{route('ticket.create')}}">
                        <div class="card card-inverse card-primary">
                            <div class="card-block p-b-0">
                                <div class="btn-group pull-left">
                                    <button type="button" class="btn btn-transparent active p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-people"></i>
                                    </button>
                                    
                                </div>
                                <h4 class="m-b-0">{{$ticket->count()}}</h4>
                                <p> تذكرة</p>
                            </div>
                            <div class="chart-wrapper p-x-1" style="height:70px;">
                                <canvas id="card-chart1" class="chart" height="70"></canvas>
                            </div>
                        </div>
                        </a>
                    </div>
                    <!--/col-->

                    <div class="col-sm-6 col-lg-3">
                       <a href="{{route('universty.create')}}">
                       <div class="card card-inverse card-info">
                            <div class="card-block p-b-0">
                                <button type="button" class="btn btn-transparent active p-a-0 pull-left">
                                    <i class="icon-home"></i>
                                </button>
                                <h4 class="m-b-0">{{$universty->count()}}</h4>
                                <p> الجامعات</p>
                            </div>
                            <div class="chart-wrapper p-x-1" style="height:70px;">
                                <canvas id="card-chart2" class="chart" height="70"></canvas>
                            </div>
                        </div>
                       </a>
                    </div>
                    <!--/col-->

                    <div class="col-sm-6 col-lg-3">
                        <a href="{{route('department.create')}}">
                        <div class="card card-inverse card-warning">
                            <div class="card-block p-b-0">
                                <div class="btn-group pull-left">
                                    <button type="button" class="btn btn-transparent active p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-graduation"></i>
                                    </button>
                                </div>
                                <h4 class="m-b-0">{{$department->count()}}</h4>
                                <p> الاقسام</p>
                            </div>
                            <div class="chart-wrapper" style="height:70px;">
                                <canvas id="card-chart3" class="chart" height="70"></canvas>
                            </div>
                        </div>
                        </a>
                    </div>
                    <!--/col-->

                    <div class="col-sm-6 col-lg-3">
                        <a href="{{route('employee.create')}}">
                        <div class="card card-inverse card-danger">
                            <div class="card-block p-b-0">
                                <div class="btn-group pull-left">
                                    <button type="button" class="btn btn-transparent active p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-users"></i>
                                    </button>
                                </div>
                                <h4 class="m-b-0">{{$employee->count()}}</h4>
                                <p> الموظفين</p>
                            </div>
                            <div class="chart-wrapper p-x-1" style="height:70px;">
                                <canvas id="card-chart4" class="chart" height="70"></canvas>
                            </div>
                        </div>
                        </a>
                    </div>
                    <!--/col-->

                </div>
                <!--/row-->
    </div>
</div>
@endsection
