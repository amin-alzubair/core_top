@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="animate fadeIn">
    @if(session('success'))
    
    {{session('message')}}
    @endif
<div class="row">
    <div class="col-sm-4">

        <div class="card">
        <div class="card-header">
        <strong>منصرف  جديدة</strong>
        </div>
        <div class="card-block">
        <form action="/post_expense" method="POST">
           @csrf
        <div class="row">
        <div class="col-sm-12">
        <div class="form-group"><label for="revenue">البند</label>
        <input type="text" name="point" id="" class="form-control @error('point') is-invlaid @enderror">
        
        </div>
        @error('point')
         <div class="alret alert-danger">{{$message}}</div>
        
        @enderror
        </div>
        
        
        </div><!--end internal row-->
        
        <div class="row">
        <div class="col-sm-4">
        <div class="form-group">
            <label for="bound"> الملبغ</label>
            <input type="text" name="price" id="" class="form-control">
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
            <input type="text" name="note" id="" class="form-control">
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


<div class="col-sm-8">
    <div class="card">
        <div class="card-header">
        <i class="fa fa-align-justify"></i>
        
        <strong>المنصرفات</strong>
        </div>
        <div class="card-block">
            <table class="table table-striped">
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
              تاريخ الصرف
            </th>
            <th>
            الملاحظة
            </th>
            </tr>
            </thead>

            <tbody>
            @foreach($expenses as $expense)
            <tr>
            <td>{{$expense->point}}</td>
            <td>{{$expense->price}}</td>
            <td>{{$expense->employee->employee_name}}</td>
            <td>{{$expense->created_at}}</td>
            <td>{{$expense->note}}</td>
            
            </tr>
            
            @endforeach
            
            </tbody>
            
            </table>
        </div>
    </div>
</div>



</div><!--end main row-->


</div>

</div>
@endsection