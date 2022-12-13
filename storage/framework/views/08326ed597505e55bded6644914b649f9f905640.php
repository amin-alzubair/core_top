<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version  v1.0.0-alpha.2
 * @link  http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license  MIT
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
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Icons -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('fonts/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/simple-line-icons.css')); ?>" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="<?php echo e(asset('dest/style.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body class="navbar-fixed sidebar-nav fixed-nav">
    <?php if(auth()->guard()->check()): ?>
    <header class="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
            <a class="navbar-brand" href="#"></a>

            <ul class="nav navbar-nav hidden-md-down">
                <li class="nav-item">
                    <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
                </li>

                <li class="nav-item p-x-1">

                    <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                        <i class="fa fa-home"></i>
                        الرئيسية
                    </a>
                </li>
            <ul class="nav navbar-nav pull-left hidden-md-down">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="hidden-md-down"><?php echo e(auth()->user()->name); ?></span>
                        <?php if(auth()->user()->isOnline()): ?>
                          <span class="alert alert-success">Online</span>
                        <?php endif; ?>
                        <img src="<?php echo e(asset('img/avatars/6.jpg')); ?>" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!--<a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="tag tag-default">42</span></a>-->
                        <div class="divider"></div>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> خروج</a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
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
                    <a class="nav-link" href="<?php echo e(route('dashboard')); ?>"><i class="icon-speedometer"></i> لوحة تحكم <span class="tag tag-info">جدید</span></a>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> الاشتراكات </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('ticket.create')); ?>"><i class="icon-plus"></i>عرض الاشتراكات</a>
                        </li>
                    </ul>
                </li>
                <!--  tickets -->
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> المنصرافات </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('expense.create')); ?>"><i class="icon-plus"></i>عرض المنصرافات</a>
                        </li>
                    </ul>
                </li>
                <!--  expense -->


                <?php if(auth()->user()->isAdmin): ?>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> الموظفين </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('employee.create')); ?>"><i class="icon-plus"></i>قائمة الموظفين</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> الخطط </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('plans.index')); ?>"><i class="icon-plus"></i>عرض الخطط</a>
                        </li>
                    </ul>
                </li>

                <?php endif; ?>
                <!--  employees-->

            </ul>
            <?php endif; ?>
        </nav>
    </div>

    <!-- Main content -->
    <main class="main">

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </main>
    <div class="container-fluid">

        <div class="animated fadeIn">


        </div>

    </div>
    <footer class="footer">

        <?php echo e(date('d-M-Y')); ?>

    </footer>


    <!-- Bootstrap and necessary plugins -->
    <script src="<?php echo e(asset('js/libs/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/libs/tether.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/libs/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/libs/pace.min.js')); ?>"></script>

    <!-- Plugins and scripts required by all views -->
    <script src="<?php echo e(asset('js/libs/Chart.min.js')); ?>"></script>

    <!-- CoreUI main scripts -->

    <script src="<?php echo e(asset('js/bb.js')); ?>"></script>

    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    <script src="<?php echo e(asset('js/views/main.js')); ?>"></script>

    <!-- Grunt watch plugin -->
    <!--<script src="//localhost:35729/livereload.js"></script>>-->
</body>
</html>
<?php /**PATH C:\xampp\htdocs\core_top\resources\views/layouts/master.blade.php ENDPATH**/ ?>