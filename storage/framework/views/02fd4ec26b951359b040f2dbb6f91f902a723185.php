<?php $__env->startSection('content'); ?>



  <section class="page-title section-wrap">
        <div class="container">
        <div class="row">
            <div class="col-8">
              <img src="/storage/car_img/<?php echo e($car->car_img); ?>" class="entry__img" alt="<?php echo e($car->car_model); ?>">
            </div>
            <div class="col-4">
               <h2><?php echo e($car->car_model); ?></h2>
                <h6> <i class="fas fa-rupee-sign"></i> <?php echo e($car->day_rent); ?> Per Day </h6>

                <?php if(empty($user)): ?>
                <button class="btn btn--lg btn--dark" style="margin: 20px 0; width: 100%;"><span>Please Login To Rent</span></button>
                
                <?php elseif($requested): ?> 
                  <button class="btn btn--lg btn--dark" style="margin: 20px 0; width: 100%;"><span>Already Requested</span></button>
                
                <?php elseif($user->user_type == 'customer'): ?>

                <form action="/car/rent" method="POST">
                  <?php echo csrf_field(); ?>

                  <input type="hidden" name="car_id" value="<?php echo e($car->id); ?>">
                  <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                  <button class="btn btn--lg btn--color" style="margin: 20px 0; width: 100%;">
                    <span>Rent Car</span>
                  </button>
                </form>
                <?php elseif($user->id == $car->user_id): ?> 
                <a href="/edit/<?php echo e($car->id); ?>" class="btn btn--lg btn--color" style="margin: 20px 0; width: 100%;"><span>Edit Product</span></a>
                
                <?php else: ?>
                <button class="btn btn--lg btn--dark" style="margin: 20px 0; width: 100%;"><span>Only Customers can Rent Cars</span></button>
                <?php endif; ?>
                <br>
                <p> Vehicle Number: <b><?php echo e($car->car_number); ?></b> </p>
                <p>Seat Capacity: <b><?php echo e($car->capacity); ?></p>
                
            </div>
        </div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\GitHub\Heroku\agency\resources\views/home/car.blade.php ENDPATH**/ ?>