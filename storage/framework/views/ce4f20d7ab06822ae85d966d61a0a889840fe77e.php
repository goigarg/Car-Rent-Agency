<?php $__env->startSection('content'); ?>
<!-- From Blog -->
<section class="section-wrap">
<div class="container">
    <div class="title-row title-row--boxed text-center">
    <h2 class="section-title">Search </h2>
    <p class="subtitle"></p>
    </div>
    <div class="row card-row"> 
 
    <?php if(count($search) > 0): ?>
        <?php $__currentLoopData = $search; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4">
            <a href="/car/<?php echo e($item->id); ?>">
            <article class="entry card box-shadow hover-up">
              <div class="entry__img-holder card__img-holder">
               

                <img src="/storage/car_img/<?php echo e($item->car_img); ?>" class="entry__img" alt="<?php echo e($item->car_model); ?>">
             

                <div class="entry__body card__body">                    
                  <h4 class="entry__title">
                   <?php echo e($item->car_model); ?>

                  </h4>
                  <ul class="entry__meta">
                    <li class="entry__meta-category">
                      <i class="fas fa-rupee-sign"></i> <?php echo e($item->day_rent); ?> Per Day             
                    </li>
                  </ul>                     
           
                </div>
              </div>
            </article>
          </a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>
</div>
</section> <!-- end from blog -->

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\GitHub\Heroku\agency\resources\views/home/search.blade.php ENDPATH**/ ?>