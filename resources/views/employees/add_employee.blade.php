@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="animate fadeIn">
@if(session('success'))

<div class="alert alert-success">{{sesion('message')}}</div>

@endif
    <div class="row">
        <div class="col-sm-4 md-col-8">
            <div class="card">
            <div class="card-header">
             <span class="btn btn-primary"><i class="icon-plus"></i></span>
             <strong>اضافة موظف جديد</strong>
            </div>
           <div class="card-block">
           <form action="{{route('employee.store')}}" method="post">
                 @csrf
           <div class="form-group">
               <label for="name">اسم الموظف</label>
               <input type="text" name="name" id="" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
           </div>
           @error('name')
               <div class="alert alert-danger invalid-feedback" role="alert">

                {{$message}}
               
               </div>
               @enderror

               <div class="form-group">
               <label for="email">البريد  الالكتروني</label>
               <input type="email" name="email" value="{{old('email')}}" id="" class="form-control @error('email') is-invalid @enderror">
           </div>
           @error('email')
               <div class="alert alert-danger invalid-feedback" role="alert">

                {{$message}}
               
               </div>
               @enderror

               <div class="form-group">
               <label for="password">كلمة المرور</label>
               <input type="password" name="password" id="" class="form-control @error('password') is-invalid @enderror">
           </div>
           @error('password')
               <div class="alert alert-danger invalid-feedback" role="alert">

                {{$message}}
               
               </div>
               @enderror

               <div class="form-group">
               <label for="password_confirm">تاكيد كلمة المرور </label>
               <input type="password" name="password_confirmation" id="" class="form-control @error('password_confirm') is-invalid @enderror">
           </div>
           @error('password_confirm')
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

        <div class="col-sm-8 col-md-8">
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
        <th>بريد الموظف</th>
        <th>العملية</th>
        <th>Is-Admin</th>
        
        </tr>
        </thead>
        <tbody>
        @foreach($employee as $employee)
        <tr>
        <th>{{$employee->name}}</th>
        <th>{{$employee->email}}</th>
        <th>@if(auth()->user()->id != $employee->id)<a href="{{route('employee.destroy',$employee->id)}}" class="btn btn-danger" ><i class="fa fa-trash"></i></a>@endif</th>
        <th>
            <form >
               <input type="checkbox" data-id="{{ $employee->id }}" name="isAdmin" placeholder="is-Admin" class="js-switch" {{ $employee->isAdmin == 1 ? 'checked' : '' }}>
            </form>
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
<script>
    
let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
elems.forEach(function(html) {
  let switchery = new Switchery(html,  { size: 'small' });
});
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }}),
  $('.js-switch').change(function(){
      let isAdmin = $(this).prop('checked')===true ? 1 :0;
      let userId = $(this).data('id');
      let token = "{{csrf_token()}}"
      $.ajax({
          type:'post',
          dataType: 'json',
          url: "/set_admin",
          data: {'isAdmin':isAdmin,'user_id':userId,_token:token},
          success:function(data){
              toastr.options.closeButton = true;
              toastr.options.closeMethod = 'fadeOut';
              toastr.options.closeDuration = 100;
              toastr.success(data.message);
          }
      });
  });
});
</script>
@endsection
