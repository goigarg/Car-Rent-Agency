<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="content-wrapper oh">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\GitHub\Heroku\agency\resources\views/layouts/index.blade.php ENDPATH**/ ?>