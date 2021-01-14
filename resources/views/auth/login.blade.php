@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
                <div class="card-group ">
                    <div class="card p-a-2">
                        <div class="card-block">
                            <h1>دخول</h1>
                            <p class="text-muted">    تسجيل الدخول الي حساب الخاص</p>

                            <form action="{{route('login')}}" method="post">

                            @csrf
                            <div class="input-group m-b-1">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                                <input type="email" class="form-control en" name="email" placeholder="نام کاربری یا ایمیل">
                            </div>
                            <div class="input-group m-b-2">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                <input type="password" name="password" class="form-control en" placeholder="رمز ورود">
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="submit" class="btn btn-primary p-x-2">
                                        <i class="icon-login"></i>
                                        دخول</button>
                                </div>
                            </form>
                                <div class="col-xs-6 text-xs-right">
                                    <button type="button" class="btn btn-link p-x-0">هل نسيت كلمة السر؟</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-inverse card-primary p-y-3" style="width:44%">
                        <div class="card-block text-xs-center">
                            <div>
                                <h2>ثبت نام</h2>
                                <p>اگر در سامانه عضو نیستید به راحتی می توانید همین الان نام نویسی کنید.</p>
                                <button type="button" class="btn btn-primary active m-t-1">عضویت رایگان</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
