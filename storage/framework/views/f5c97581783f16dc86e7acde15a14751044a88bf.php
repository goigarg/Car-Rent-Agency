<?php $__env->startSection('content'); ?>
<section class="page-title text-center">      
    <h1 class="page-title__title">Edit Product</h1>
</section> <!-- end page title -->


    <!-- Edit Form -->
    <section class="section-wrap">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="contact box-shadow-large offset-top-171">
   
  
                <form class="contact-form mt-30 mb-30" method="post" action="/car/edit" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                        <?php echo method_field('patch'); ?>

                        <input type="hidden" name="id" value="<?php echo e($car->id); ?>">
                      <div class="form-group">
                          <label for="CarModel">Vehicle Model</label>
                          <input id="CarModel" type="text" value="<?php echo e($car->car_model); ?>" class="form-control" name="car_model" required>
                        </div>
    
                        <div class="form-group">
                            <label for="Capacity">Vehicle Capacity</label>
                            <input id="Capacity" type="number" value="<?php echo e($car->capacity); ?>" class="form-control" name="capacity" required>
                          </div>

                          <div class="form-group">
                            <label for="Rent">Rent Per Day</label>
                            <input id="Rent" type="number" value="<?php echo e($car->day_rent); ?>" class="form-control" name="day_rent" required>
                          </div>

                          <div class="form-group">
                            <label for="carNumber">Vehicle Number</label>
                            <input id="carNumber" type="text" value="<?php echo e($car->car_number); ?>" class="form-control" name="car_number" required>
                          </div>
                 
                          <br>

  
                  <button class="btn btn--lg btn--color btn--wide btn--button" type="submit"> Add Car</button>
                 
                </form>
  
  
  
              </div>
            </div>
          </div>
        </div>
      </section> <!-- end contact -->
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\GitHub\Heroku\agency\resources\views/home/editcar.blade.php ENDPATH**/ ?>