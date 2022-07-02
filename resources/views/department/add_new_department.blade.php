@extends('layouts.master')
@section('content')
 <div class="container-fluid">
     <div class="animate fadeIn">
         <div class="row">
             <div class="col-sm-8 col-md-12">
                 <div class="card">
                     <div class="card-header">
                         <i class="icon-plus"></i>
                         <strong>اضافة تخصص</strong>
                         <small>جديد</small>
                     </div>
                     <div class="card-block">
                         <form action="/post_department" method="post">
                         @csrf
                             <div class="form-group"><label for="depart">اسم القسم</label>
                             <input type="text" name="department" id="" class="form-control @error('department') is-invalid @enderror" >
                            
                            @error('department')
                             <div class="alert alert-danger">
                             {{$message}}
                             </div>
                            @enderror
                            </div>
                            <div class="form-group"><button class="btn btn-primary">اضافة</button></div>
                         </form>
                     </div>
                 </div>
             </div>
             
         </div>
         
         <div  class="row">
        <div class="col-sm-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                    <i class="fa fa-align-justify"></i> 
                        <strong>  الاقسام المتوفرة </strong>
                    </div>
                    <div class="card-block">
                 <table class="table">
                     <thead>
                         <tr>
                             <th>#</th>
                             <th> القسم</th>
                         </tr>
                     </thead>
                     <tbody>
                        @foreach($departments as $department)
                        
                        <tr>
                        <th>{{$department->id}}</th>
                        <th>{{$department->department}}</th>
                        
                        </tr>
                        
                        @endforeach
                     </tbody>
                 </table>
                 
                    </div>
                </div>
                    <ul class="pagination">
                        <li> {{$departments->links()}}</li>
                        
                 </ul>
            </div>
        



</div>















     </div>
 </div>

@endsection