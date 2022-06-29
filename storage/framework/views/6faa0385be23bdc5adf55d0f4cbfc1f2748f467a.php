<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="animate fadeIn">
        <?php if(session('success')): ?>

        <?php echo e(session('message')); ?>

        <?php endif; ?>
        <div class="row">
            <div class="col-sm-12 col-md-6">

                <div class="card">
                    <div class="card-header">
                        <strong>منصرف جديدة</strong>
                    </div>
                    <div class="card-block">
                        <form action="/post_expense" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"><label for="revenue">البند</label>
                                        <input type="text" name="point" id="" class="form-control <?php $__errorArgs = ['point'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invlaid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                    </div>
                                    <?php $__errorArgs = ['point'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alret alert-danger"><?php echo e($message); ?></div>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>


                            </div>
                            <!--end internal row-->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="bound"> الملبغ</label>
                                        <input type="text" name="price" id="" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    </div>

                                    <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alret alert-danger"><?php echo e($message); ?></div>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="bound">ملاحظات</label>
                                        <input type="text" name="note" id="" class="form-control">
                                    </div>


                                </div>
                            </div>
                            <!--end internal row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group"><button class="btn btn-primary">
                                            اضافة</button></div>
                                </div>

                            </div>
                            <!--end internal row-->

                        </form>

                    </div>

                </div>

            </div>


            <div class="col-sm-12 col-md-6">
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
                                <?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($expense->point); ?></td>
                                    <td><?php echo e($expense->price); ?></td>
                                    <td><?php echo e($expense->user->name); ?></td>
                                    <td><?php echo e($expense->created_at); ?></td>
                                    <td><?php echo e($expense->note); ?></td>
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>



        </div>
        <!--end main row-->


    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\core_top\resources\views/expense/add_expense.blade.php ENDPATH**/ ?>