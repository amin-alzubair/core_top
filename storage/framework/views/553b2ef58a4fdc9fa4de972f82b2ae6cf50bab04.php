<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="card">
        <div class="card-block">
            <div class="flex"><strong>رقم البطاقة :<?php echo e($ticket->id); ?></strong></div>
            <div>الاسم : <strong><?php echo e($ticket->student_name); ?></strong></div>
            <div>رقم الهاتف: <strong><?php echo e($ticket->student_phone); ?></strong></div>
            <div>نوع الاشتراك : <strong><?php echo e($ticket->plan->plan_name); ?></strong></div>
            <div>تاريخ الاشتراك:<strong><?php echo e($ticket->created_at->format('Y-m-d')); ?></strong></div>
            <div> القيمة المدفوعة:<strong>$<?php echo e($ticket->plan->price); ?></strong></div>
            <div>حالة الاشتراك : <strong><?php echo e($ticket->stauts ? 'مفعل': 'غير مفعل'); ?></strong></div>
        </div>
        <?php if($ticket->stauts === 0): ?>
        <div class="mr-10"><a href="<?php echo e(route('ticket.approved',$ticket->id)); ?>">تفعيل</a></div>
        <?php endif; ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\core_top\resources\views/tickets/ticket_checkout.blade.php ENDPATH**/ ?>