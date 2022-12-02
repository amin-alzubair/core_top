
@extends('layouts.master')
@section('title','dashboard')
@section('content')
<div class="container-fluid">
    <div class="animate fadeIn">
    <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <a href="{{route('ticket.create')}}">
                        <div class="card card-inverse card-primary">
                            <div class="card-block p-b-0">
                                <div class="btn-group pull-left">
                                    <button type="button" class="btn btn-transparent active p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-people"></i>
                                    </button>

                                </div>
                                <h4 class="m-b-0">{{$ticket->count()}}</h4>
                                <p> الاشتراكات</p>
                            </div>
                            <div class="chart-wrapper p-x-1" style="height:70px;">
                                <canvas id="card-chart1" class="chart" height="70"></canvas>
                            </div>
                        </div>
                        </a>
                    </div>
                    <!--/col-->

                    <div class="col-sm-6 col-lg-6">
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
