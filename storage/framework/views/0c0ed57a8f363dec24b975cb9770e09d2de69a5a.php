
<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="animated fadeIn">
        <?php if(session('success')): ?>
         <?php echo e(session('message')); ?>

        
        <?php endif; ?>

        <div class="row">
            <div class="col-sm-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <i class="icon-plus"></i>
                        <strong>اضافة جامعة </strong>
                        <small>جديدة</small>
                    </div>
                    <div class="card-block">
                        <form action="<?php echo e(route('universty.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="university">اسم الجامعة</label>
                                <input type="text" name="university" id="" class="form-control <?php $__errorArgs = ['university'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                                is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <?php $__errorArgs = ['university'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                        <?php $__currentLoopData = $universty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $universt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <tr>
                        <th><?php echo e($universt->id); ?></th>
                        <th><?php echo e($universt->university); ?></th>
                        
                        </tr>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tbody>
                 </table>
                 
                    </div>
                </div>
                    <ul class="pagination">
                        <li> <?php echo e($universty->links()); ?></li>
                        
                 </ul>
            </div>
        



</div>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\core_top\resources\views/university/add_new_university.blade.php ENDPATH**/ ?>