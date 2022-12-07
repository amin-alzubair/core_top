<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-block p-4">
            <h4 class="card-title"><?php echo e($ticket->student_name); ?></h4>
            <p class="card-text">
            <div class="">
                <b>رقم الهاتف</b>
                <div><?php echo e($ticket->student_phone); ?></div>
            </div>
            <div class="">
                <b> نوع الاشتراك</b>
                <div><?php echo e($ticket->plan->plan_name); ?></div>
            </div>
            <div class="">
                <b> تاريخ الانتهاء</b>
                <div><?php echo e($ticket->exipred_at); ?></div>
            </div>

            </p>
            <b>الحالة</b>
            <?php if($ticket->stauts ===0): ?>
            <a href="<?php echo e(route('ticket.approved',$ticket->id)); ?>" class="btn btn-primary">تفعيل</a>
            <?php else: ?>
            مفعل
            <?php endif; ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\core_top\resources\views/tickets/ticket_checkout.blade.php ENDPATH**/ ?>