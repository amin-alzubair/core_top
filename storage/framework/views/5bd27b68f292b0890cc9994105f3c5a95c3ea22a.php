<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="animate fadeIn">
        <?php if(session('success')): ?>

        <div class="alert alert-success"><?php echo e(sesion('message')); ?></div>

        <?php endif; ?>
        <div class="row">
            <div class="col-sm-4 md-col-8">
                <div class="card">
                    <div class="card-header">
                        <span class="btn btn-primary"><i class="icon-plus"></i></span>
                        <strong>اضافة موظف جديد</strong>
                    </div>
                    <div class="card-block">
                        <form action="<?php echo e(route('employee.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="name">اسم الموظف</label>
                                <input type="text" name="name" id="" value="<?php echo e(old('name')); ?>" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            </div>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger invalid-feedback" role="alert">

                                <?php echo e($message); ?>


                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <div class="form-group">
                                <label for="email">البريد الالكتروني</label>
                                <input type="email" name="email" value="<?php echo e(old('email')); ?>" id="" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            </div>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger invalid-feedback" role="alert">

                                <?php echo e($message); ?>


                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <div class="form-group">
                                <label for="password">كلمة المرور</label>
                                <input type="password" name="password" id="" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            </div>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger invalid-feedback" role="alert">

                                <?php echo e($message); ?>


                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <div class="form-group">
                                <label for="password_confirm">تاكيد كلمة المرور </label>
                                <input type="password" name="password_confirmation" id="" class="form-control <?php $__errorArgs = ['password_confirm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            </div>
                            <?php $__errorArgs = ['password_confirm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger invalid-feedback" role="alert">

                                <?php echo e($message); ?>


                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($employee->name); ?></th>
                                    <th><?php echo e($employee->email); ?></th>
                                    <th><?php if(auth()->user()->id != $employee->id): ?><a href="<?php echo e(route('employee.destroy',$employee->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a><?php endif; ?></th>
                                    <th>
                                        <?php if($employee->id != auth()->user()->id): ?>
                                        <form>
                                            <input type="checkbox" data-id="<?php echo e($employee->id); ?>" name="isAdmin" placeholder="is-Admin" class="js-switch" <?php echo e($employee->isAdmin == 1 ? 'checked' : ''); ?>>
                                        </form>
                                        <?php endif; ?>
                                    </th>

                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
        let switchery = new Switchery(html, {
            size: 'small'
        });
    });
    $(document).ready(function() {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            }),
            $('.js-switch').change(function() {
                let isAdmin = $(this).prop('checked') === true ? 1 : 0;
                let userId = $(this).data('id');
                let token = "<?php echo e(csrf_token()); ?>"
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    url: "/set_admin",
                    data: {
                        'isAdmin': isAdmin,
                        'user_id': userId,
                        _token: token
                    },
                    success: function(data) {
                        toastr.options.closeButton = true;
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 100;
                        toastr.success(data.message);
                    }
                });
            });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\core_top\resources\views/employees/add_employee.blade.php ENDPATH**/ ?>