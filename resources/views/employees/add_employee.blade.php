@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="animate fadeIn">
@if(session('success'))

<div class="alert alert-success">{{sesion('message')}}</div>

@endif
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-header">
             <span class="btn btn-primary"><i class="icon-plus"></i></span>
             <strong>اضافة موظف جديد</strong>
            </div>
           <div class="card-block">
           <form action="{{route('employee.store')}}" method="post">
                 @csrf
           <div class="form-group">
               <label for="اسم الموظف"></label>
               <input type="text" name="employee_name" id="" class="form-control @error('employee_name') is-invalid @enderror">
           </div>
           @error('employee_name')
               <div class="alert alert-danger invalid-feedback" role="alert">

                {{$message}}
               
               </div>
               @enderror
           <div class="form-group">
           <button class="btn btn-primary">اضافة</button>
           </div>
           
           
           </form>
           
           </div>
            
         </div>
        </div>

        <div class="col-sm-6">
        <div class="card">
        <div class="card-header">
        <i class="fa fa-algin-justify"></i>
        <strong>الموظفين</strong>
        
        </div>
        <div class="card-block">
        <table class="table">
        <thead>
        <tr>
        <th>اسم الموظف</th>
        <th>العملية</th>
        
        </tr>
        </thead>
        <tbody>
        @foreach($employee as $employee)
        <tr>
        <th>{{$employee->employee_name}}</th>
         <th>

         <a href="{{route('employee.destroy',$employee->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
         
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