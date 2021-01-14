@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="animate fadeIn">
<div class="row">
    <div class="col-sm-6">
        @if(session('success'))
        {{session('message')}}
        @endif

        <div class="card">
        <div class="card-header">
        <strong>اراد جديدة</strong>
        </div>
        <div class="card-block">
        <form action="/post_revenue" method="post">
        @csrf
        <div class="row">
        <div class="col-sm-12">
        <div class="form-group"><label for="revenue">البند</label>
        <input type="text" name="point" id="" class="form-control @error('point') is-invalid @enderror">
        @error('point')
         <div class="alert alert-danger">{{$message}}</div>
        
        @enderror
        </div>
        </div>
        
        
        </div><!--end internal row-->
        
        <div class="row">
        <div class="col-sm-4">
        <div class="form-group">
            <label for="bound"> الملبغ</label>
            <input type="text" name="price" id="" class="form-control @error('price') 
            is-invalid @enderror">
            @error('price')
           <div class="alert alert-danger">{{$message}}</div>
        
            @enderror
        </div>
        
        
        </div>
        <div class="col-sm-4">
        <div class="form-group">
            <label for="bound"> اسم المستخدم</label>
            <select name="employee_id" id="" class="form-control">
            @foreach($employees as $employee)
            
                <option value="{{$employee->id}}">{{$employee->employee_name}}</option>
            @endforeach
            </select>
        </div>
        
        
        </div>
        <div class="col-sm-4">
        <div class="form-group">
            <label for="bound">ملاحظات</label>
            <input type="text" name="note" id="" 
            class="form-control">
        </div>
        
        
        </div>
        </div><!--end internal row-->
        <div class="row">
        <div class="col-sm-12">
            <div class="form-group"><button class="btn btn-primary">
            اضافة</button></div>
        </div>
        
        </div><!--end internal row-->
        
        </form>
        
        </div>

        </div>

    </div>


<div class="col-sm-6">
    <div class="card">
        <div class="card-header">
        <i class="fa fa-align-justify"></i>
        
        <strong>الارادات</strong>
        </div>
        <div class="card-block">
            <table class="table">
            <thead>
            <tr>
            <th>
            البند
            </th>
            <th>
            المبلغ
            </th>
            <th>
             اسم الموظف
            </th>
            <th>
            تاريخ الاراد
            </th>
            <th>
            الملاحظة
            </th>
            </tr>
            </thead>

            <tbody>
             @foreach($revenues as $revenue)
             <tr>
             <th>{{$revenue->point}}</th>
             <th>{{$revenue->price.''.'ج'}}</th>
             <th>{{$revenue->employee->employee_name}}</th>
             <th>{{$revenue->created_at}}</th>
             <th>{{$revenue->note}}</th>
            
            </tr>
             @endforeach
            
            </tbody>
            </table>
        </div>
    </div>
    {{$revenues->links()}}
</div>



</div><!--end main row-->


</div>

</div>
@endsection