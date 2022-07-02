@extends('layouts.master')

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
                                <small class="btn btn-danger btn-sm">تذكرة</small>
                            </div>
                            <div class="card-block">
                                <form action="{{route('ticket.store')}}" method="post">

                                @csrf
                                <div class="row">
                                <div class="col-sm-3">

                                    <div class="form-group">
                                        <label for="name">اسم الطالب</label>
                                        <input 
                                        type         ="text" 
                                        name          ="student_name" 
                                        class         ="form-control" 
                                        id           ="name"
                                        placeholder  ="اسم الطالب"
                                        value="{{old('student_name')}}">
                                        
                                    </div>


                             </div>

                                    <div class="form-group col-sm-3">
                                        <label for="ccmonth">الجامعة</label>
                                        <select   class="form-control" id="ccmonth" name="input_unev">
                                        <option value="">اختار الجامعة</option>
                                            @foreach($universty as $un)
                                            
                                            <option value="{{$un->id}}">{{$un->university}}</option>
                                            @endforeach
                                            
                                            
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-3">
                                        <label for="ccyear">التخصص</label>
                                        <select class="form-control " id="ccyear" name="input_depa">
                                        <option value="">اختار القسم</option>
                                            @foreach($depart as $depart)
                                            <option value="{{$depart->id}}">{{$depart->department}}</option>
                                            @endforeach
                                            
                                            
                                        </select>
                                    </div>

                                    <div class="col-sm-3">

                                        <div class="form-group">
                                            <label for="cvv">الملبغ المدفع</label>
                                            <input 
                                            type          ="text" 
                                            class         ="form-control @error('price') is-invalid @enderror" 
                                            name          ="price" 
                                            id            ="cvv" 
                                            placeholder   ="123"
                                            value="{{old('price')}}">
                                        </div>

                                    </div>

                                </div>
                                <!--/row-->
                            <div class="row">
                                    <div class="col-sm-4">
                                        <label for="gander">الجنس</label>
                                    </div>
                                <div class="col-sm-4">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" value="1" name="gender" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">ذكر</label>
                                    </div>
                                </div>
                                
                            <div class="col-sm-4">
                            <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" value="2" name="gender" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2"> انثي</label>
                                    </div>
                            </div>

                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-sm-12">
                                <div class="form-group">
                                 <button class="btn btn-success btn-xl form-control">اضافة</button>
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
@endsection