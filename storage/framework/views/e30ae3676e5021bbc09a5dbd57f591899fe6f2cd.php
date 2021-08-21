<?php $__env->startSection('content'); ?>

    <!-- Hero -->
    <section class="hero">

      <div class="container">
        <?php echo e(session('msg')); ?>


        <div class="row justify-content-center">
          <div class="col-lg-10">
            <!-- Optin Form -->
            <div class="optin">
              <h3 class="optin__title">Search Cars</h3>
              <form class="optin__form" method="post" action="/search">
                <?php echo csrf_field(); ?>
                <div class="optin__form-group form-group">                    
                  <input name="car_name" type="text" class="form-input optin__input" id="optin-name" placeholder="Car Model" required>

                  <span class="input-underline"></span>
                </div>
               
                <button class="optin__btn btn btn--md btn--color btn--button">Search</button>                 
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- end hero -->


      <!-- From Blog -->
      <section class="section-wrap">
        <div class="container">
         
          <div class="title-row title-row--boxed text-center">
            <h2 class="section-title">Cars Available for Rent</h2>
            <p class="subtitle">Check Out Latest Avaiable Car</p>
          </div>

          <div class="row card-row">
    
            <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

            <div class="col-lg-4">
              <a href="/car/<?php echo e($car->id); ?>">
              <article class="entry card box-shadow hover-up">
                <div class="entry__img-holder card__img-holder">

                    <img src="/storage/car_img/<?php echo e($car->car_img); ?>" class="entry__img" alt="<?php echo e($car->car_model); ?>">
               

                  <div class="entry__body card__body">                    
                    <h4 class="entry__title">
                      <?php echo e($car->car_model); ?>

                    </h4>
                    <ul class="entry__meta">
                      <li class="entry__meta-category">
                        <i class="fas fa-rupee-sign"></i>
                       <?php echo e($car->day_rent); ?> Per
                      </li>
                    </ul>                     
             
                  </div>
                </div>
              </article>
            </a>
            </div>
    

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>


        </div>
      </section> <!-- end from section -->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\GitHub\Heroku\agency\resources\views/home/index.blade.php ENDPATH**/ ?>