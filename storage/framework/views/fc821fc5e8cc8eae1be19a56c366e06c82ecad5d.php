<?php $__env->startSection('content'); ?>


<section class="section-wrap text-center">      
    <h1 class="page-title__title">Agency Home Page</h1>

    <div class="container text-center">
        <?php if(session('msg')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('msg')); ?>

            </div>
        <?php endif; ?>

        
        <a href="/car/add" class="btn btn--lg btn--color" style="padding: 10px;">Add New Cars for Rent</a>

        <a href="/home/rent" class="btn btn--lg btn--color" style="padding: 10px;">Check All Rent Requests</a>
    </div>
<section>

<section class="section-wrap">
    <div class="container text-center">
        <h1>Listed Cars</h1>
        <br>
        <div class="row">

            <?php if(count($cars) > 0): ?>
               <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
               <div class="col-lg-4">
                <a href="/car/<?php echo e($car->id); ?>">
                <article class="entry card box-shadow hover-up">
                  <div class="entry__img-holder card__img-holder">
                      <img src="/storage/car_img/<?php echo e($car->car_img); ?>" class="entry__img" alt="<?php echo e($car->car_model); ?>"  style="max-height: 200px; width: auto;">
                    <div class="entry__body card__body">                    
                      <h4 class="entry__title">
                        <?php echo e($car->car_model); ?>

                      </h4>
                      <ul class="entry__meta">
                        <li class="entry__meta-category">
                          <i class="fas fa-rupee-sign"></i>
                         <?php echo e($car->day_rent); ?> Per Day
                        </li>
                      </ul>                     
               
                    </div>
                  </div>
                </article>
              </a>
              </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
                <p>You haven't listed any cars yet!</p>
            <?php endif; ?>
        </div>


    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\GitHub\Heroku\agency\resources\views/home.blade.php ENDPATH**/ ?>