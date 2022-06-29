
<?php $__env->startSection('content'); ?>
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
                         <?php echo csrf_field(); ?>
                             <div class="form-group"><label for="depart">اسم القسم</label>
                             <input type="text" name="department" id="" class="form-control <?php $__errorArgs = ['department'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >
                            
                            <?php $__errorArgs = ['department'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                             <div class="alert alert-danger">
                             <?php echo e($message); ?>

                             </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <tr>
                        <th><?php echo e($department->id); ?></th>
                        <th><?php echo e($department->department); ?></th>
                        
                        </tr>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tbody>
                 </table>
                 
                    </div>
                </div>
                    <ul class="pagination">
                        <li> <?php echo e($departments->links()); ?></li>
                        
                 </ul>
            </div>
        



</div>















     </div>
 </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\core_top\resources\views/department/add_new_department.blade.php ENDPATH**/ ?>