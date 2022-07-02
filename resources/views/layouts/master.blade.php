<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.2
 * @link http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
 <!DOCTYPE html>
<html lang="IR-fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    <title>@yield('title')</title>
    <!-- Icons -->
    <script src="js/app.js"></script>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="fonts/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="dest/style.css" rel="stylesheet">
</head>
<!-- BODY options, add following classes to body to change options
		1. 'compact-nav'     	  - Switch sidebar to minified version (width 50px)
		2. 'sidebar-nav'		  - Navigation on the left
			2.1. 'sidebar-off-canvas'	- Off-Canvas
				2.1.1 'sidebar-off-canvas-push'	- Off-Canvas which move content
				2.1.2 'sidebar-off-canvas-with-shadow'	- Add shadow to body elements
		3. 'fixed-nav'			  - Fixed navigation
		4. 'navbar-fixed'		  - Fixed navbar
	-->

<body class="navbar-fixed sidebar-nav fixed-nav">
@auth
    <header class="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
            <a class="navbar-brand" href="#"></a>
            
            <ul class="nav navbar-nav hidden-md-down">
                <li class="nav-item">
                    <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
                </li>

                <li class="nav-item p-x-1">
                
                    <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fa fa-home"></i>
                    الرئيسية
                     </a>
                </li>
                
            </ul>
            <ul class="nav navbar-nav pull-left hidden-md-down">
                
                
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="hidden-md-down">{{auth()->user()->name}}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!--<a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="tag tag-default">42</span></a>-->
                        <div class="divider"></div>
                        <a class="dropdown-item" href="{{route('logout')}}"
                        
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        
                        ><i class="fa fa-lock"></i> خروج</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                       </form>
                    </div>
                </li>

            </ul>
            
        </div>
    </header>
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}"><i class="icon-speedometer"></i> لوحة تحكم <span class="tag tag-info">جدید</span></a>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> التذاكر </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('ticket.create')}}"><i class="icon-plus"></i>اضافة تذكرة</a>
                        </li>
                    </ul>
                </li>
                <!--  tickets -->
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" ><i class="icon-puzzle"></i> الجامعات </a>
                    <ul class="nav-dropdown-items">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('universty.create')}}"><i class="icon-plus"></i>اضافة جامعة</a>
                        </li>
                    </ul>
                </li>
                <!--  university -->
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" ><i class="icon-puzzle"></i> الاقسام </a>
                    <ul class="nav-dropdown-items">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('department.create')}}"><i class="icon-plus"></i>اضافة قسم</a>
                        </li>
                    </ul>
                </li>
                <!--  department -->

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> المنصرافات </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('expense.create')}}"><i class="icon-plus"></i>اضافة منصرف</a>
                        </li>
                    </ul>
                </li>
                <!--  expense -->


                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> الموظفين </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('employee.create')}}"><i class="icon-plus"></i> اضافة موظفة جديد</a>
                        </li>
                    </ul>
                </li>
                <!--  employees-->

            </ul>
            @endauth
        </nav>
    </div>
    
    <!-- Main content -->
    <main class="main">

       @yield('content')

@include('sweetalert::alert')

</main>
<div class="container-fluid">

<div class="animated fadeIn">
    
        
</div>

</div>
<footer class="footer">

{{date('d-M-Y')}}
</footer>


<!-- Bootstrap and necessary plugins -->
<script src="js/libs/jquery.min.js"></script>
<script src="js/libs/tether.min.js"></script>
<script src="js/libs/bootstrap.min.js"></script>
<script src="js/libs/pace.min.js"></script>

<!-- Plugins and scripts required by all views -->
<script src="js/libs/Chart.min.js"></script>

<!-- CoreUI main scripts -->

<script src="js/bb.js"></script>

<!-- Plugins and scripts required by this views -->
<!-- Custom scripts required by this view -->
<script src="js/views/main.js"></script>

<!-- Grunt watch plugin -->
<!--<script src="//localhost:35729/livereload.js"></script>>-->
</body>

</html>

