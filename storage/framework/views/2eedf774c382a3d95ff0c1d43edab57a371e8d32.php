<?php $__env->startSection('content'); ?>


<div class="content-wrapper oh">

    <!-- Page Title -->
    <section class="page-title text-center">      
          <h1 class="page-title__title">Log in</h1>
    </section> <!-- end page title -->

    <!-- Login Form -->
    <section class="section-wrap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="contact box-shadow-large offset-top-171">
 

              <form class="contact-form mt-30 mb-30" method="post" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                 
                    <div class="form-group">
                        <label for="email"><?php echo e(__('E-Mail Address')); ?> <abbr title="required" class="required">*</abbr></label>
                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                      </div>

                                        
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>



                      <div class="form-group">
                        <label for="password"><?php echo e(__('Password')); ?> <abbr title="required" class="required">*</abbr></label>
                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                      </div>

                      <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
            
                    <label class="form-check-label" for="remember">
                        <?php echo e(__('Remember Me')); ?>

                    </label>
                </div> <br>

                <button class="btn btn--lg btn--color btn--wide btn--button" type="submit"> <?php echo e(__('Login')); ?></button>
                <div id="msg" class="message"></div>
              </form>



            </div>
          </div>
        </div>
      </div>
    </section> <!-- end contact -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\GitHub\Heroku\agency\resources\views/auth/login.blade.php ENDPATH**/ ?>