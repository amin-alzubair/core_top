<?php $__env->startSection('title','dashboard'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="animate fadeIn">
    <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <a href="<?php echo e(route('ticket.create')); ?>">
                        <div class="card card-inverse card-primary">
                            <div class="card-block p-b-0">
                                <div class="btn-group pull-left">
                                    <button type="button" class="btn btn-transparent active p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-people"></i>
                                    </button>

                                </div>
                                <h4 class="m-b-0"><?php echo e($ticket->count()); ?></h4>
                                <p> الاشتراكات</p>
                            </div>
                            <div class="chart-wrapper p-x-1" style="height:70px;">
                                <canvas id="card-chart1" class="chart" height="70"></canvas>
                            </div>
                        </div>
                        </a>
                    </div>
                    <!--/col-->

                    <div class="col-sm-6 col-lg-6">
                        <a href="<?php echo e(route('employee.create')); ?>">
                        <div class="card card-inverse card-danger">
                            <div class="card-block p-b-0">
                                <div class="btn-group pull-left">
                                    <button type="button" class="btn btn-transparent active p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-users"></i>
                                    </button>
                                </div>
                                <h4 class="m-b-0"><?php echo e($employee->count()); ?></h4>
                                <p> الموظفين</p>
                            </div>
                            <div class="chart-wrapper p-x-1" style="height:70px;">
                                <canvas id="card-chart4" class="chart" height="70"></canvas>
                            </div>
                        </div>
                        </a>
                    </div>
                    <!--/col-->

                </div>
                <!--/row-->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\core_top\resources\views/home.blade.php ENDPATH**/ ?>