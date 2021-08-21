<?php $__env->startSection('content'); ?>

<section class="hero">
    <div class="container text-center">
       <h1>All Rent Requests</h1>
      <?php if(count($data) > 0): ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4">
          <article class="entry card box-shadow hover-up">
              <div class="entry__img-holder card__img-holder">
                <img src="/storage/car_img/<?php echo e($item['car_img']); ?>" class="entry__img" alt="<?php echo e($item['car_model']); ?>">
                <div class="entry__body card__body">
                    <h4> <?php echo e($item['car_model']); ?></h4>
                    <p> Daily Rent:  <i class="fas fa-rupee-sign"></i> <?php echo e($item['day_rent']); ?> </p>
                    <p> Customer Name:  <?php echo e($item['customer_name']); ?></p>
                    <p> Customer Email: <?php echo e($item['customer_email']); ?></p>
                    <p>Requested on <?php echo e($item['rent_date']); ?></p>
                </div>
              </div>
          </article>
          </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>


    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\GitHub\Heroku\agency\resources\views/rentreq.blade.php ENDPATH**/ ?>