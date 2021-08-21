<?php $__env->startSection('content'); ?>
<section class="page-title text-center">      
    <h1 class="page-title__title">Add Cars For Rent</h1>
</section> <!-- end page title -->


    <!-- Login Form -->
    <section class="section-wrap">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="contact box-shadow-large offset-top-171">
   
  
                <form class="contact-form mt-30 mb-30" method="post" action="/car/add" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>

                      <div class="form-group">
                          <label for="CarModel">Vehicle Model</label>
                          <input id="CarModel" type="text" class="form-control" name="car_model" required>
                        </div>
    
                        <div class="form-group">
                            <label for="Capacity">Vehicle Capacity</label>
                            <input id="Capacity" type="text" class="form-control" name="capacity" required>
                          </div>

                          <div class="form-group">
                            <label for="Rent">Rent Per Day</label>
                            <input id="Rent" type="text" class="form-control" name="day_rent" required>
                          </div>

                          <div class="form-group">
                            <label for="carNumber">Vehicle Number</label>
                            <input id="carNumber" type="text" class="form-control" name="car_number" required>
                          </div>
                          <div class="form-group">
                            <label for="carImg">Car Image</label>
                            <input id="carImg" type="file" class="form-control" name="car_img">
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
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\GitHub\Heroku\agency\resources\views/home/addcar.blade.php ENDPATH**/ ?>