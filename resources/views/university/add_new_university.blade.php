@extends('layouts.master')
@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
        @if(session('success'))
         {{session('message')}}
        
        @endif

        <div class="row">
            <div class="col-sm-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <i class="icon-plus"></i>
                        <strong>اضافة جامعة </strong>
                        <small>جديدة</small>
                    </div>
                    <div class="card-block">
                        <form action="{{route('universty.store')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="university">اسم الجامعة</label>
                                <input type="text" name="university" id="" class="form-control @error('university') 
                                is-invalid @enderror">
                                @error('university')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group"><button class="btn btn-primary">
                          <i class="icon-plus"></i>
                           اضافة
                            </button>
                         </div>
                        </form>
                    </div>
                </div>
            </div><!--end col-->
        </div>
<div  class="row">
        <div class="col-sm-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                    <i class="fa fa-align-justify"></i> 
                        <strong>الجامعات المتوفرة</strong>
                    </div>
                    <div class="card-block">
                 <table class="table">
                     <thead>
                         <tr>
                             <th>الرقم</th>
                             <th>اسم الجامعة</th>
                         </tr>
                     </thead>
                     <tbody>
                        @foreach($universty as $universt)
                        
                        <tr>
                        <th>{{$universt->id}}</th>
                        <th>{{$universt->university}}</th>
                        
                        </tr>
                        
                        @endforeach
                     </tbody>
                 </table>
                 
                    </div>
                </div>
                    <ul class="pagination">
                        <li> {{$universty->links()}}</li>
                        
                 </ul>
            </div>
        



</div>

        </div>
    </div>

@endsection