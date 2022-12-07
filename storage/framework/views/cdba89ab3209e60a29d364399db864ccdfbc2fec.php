<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <?php if(session('success')): ?>

    <div class="alert alert-success"><?php echo e(sesion('message')); ?></div>

    <?php endif; ?>
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-8  col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>اضافة</strong>
                        <small class="btn btn-danger btn-sm">اشتراك</small>
                    </div>
                    <div class="card-block">
                        <form action="<?php echo e(route('ticket.store')); ?>" method="post">

                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="name"><strong>اسم الطالب</strong></label>
                                        <input type="text" name="student_name" class="form-control" id="name" placeholder="اسم الطالب" value="<?php echo e(old('student_name')); ?>">

                                    </div>


                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="name"> <strong>رقم الهاتف</strong></label>
                                        <input type="text" name="student_phone" class="form-control" id="student_phone" placeholder=" ادخل رقم الهاتف" value="<?php echo e(old('student_phone')); ?>">

                                    </div>


                                </div>


                            </div>
                            <!--/row-->

                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="plan"><strong>نوع الاشتراك</strong></label>
                                </div>

                                <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" value="<?php echo e($plan->id); ?>" name="plan" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1"><?php echo e($plan->plan_name); ?></label>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button class="btn btn-success btn-xl form-control">اشتراك</button>
                                    </div>
                                </div>
                            </div>


                            <!--////////////////////////////////////////////////////-->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8 col-lg-12  d-flex justify-content-center">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> الاشتراك
                    </div>
                    <div class="card-block">
                        <table class="table table-striped">

                            <div class="input-group m-b-1">
                                <span class="input-group-addon"><i class="icon-search"></i>
                                </span>
                                <input type="text" class="form-control" name="search" placeholder="ادخل رقم البطاقة" id="search">
                            </div>
                            <thead class="bg-primary">
                                <tr>
                                    <th>اسم الطالب</th>
                                    <th>رقم الهاتف</th>
                                    <th>رقم البطاقة</th>
                                    <th>تاريخ الاشتراك</th>
                                    <th>نوع الاشتراك</th>
                                    <th>حالة الاشتراك</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($ticket->student_name); ?></th>
                                    <th><?php echo e($ticket->student_phone); ?></th>
                                    <th><?php echo e($ticket->id); ?></th>
                                    <th><?php echo e($ticket->created_at); ?></th>
                                    <th><?php echo e($ticket->plan->plan_name); ?></th>
                                    <th><a href="<?php echo e(route('ticket.stauts',$ticket->id)); ?>"><?php echo e($ticket->stauts); ?></a></th>


                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <ul class="">
                    <li><?php echo e($tickets->links()); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\core_top\resources\views/tickets/create_ticket.blade.php ENDPATH**/ ?>