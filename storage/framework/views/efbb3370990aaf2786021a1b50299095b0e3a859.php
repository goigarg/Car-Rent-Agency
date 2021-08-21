<?php $__env->startSection('content'); ?>

    <!-- Hero -->
    <section class="hero">

      <div class="container">
        

        <div class="row justify-content-center">
          <div class="col-lg-10">
            <!-- Optin Form -->
            <div class="optin">
              <h3 class="optin__title">Search Cars</h3>
              <form class="optin__form" method="POST" action="/search">
                <?php echo csrf_field(); ?>
                <div class="optin__form-group form-group">                    
                  <input name="car_name" type="text" class="form-input optin__input" id="optin-name" required>
                  <label for="optin-name" class="optin__label">Model</label>
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
            <h2 class="section-title">Latest News</h2>
            <p class="subtitle">Here are the best features that makes margin the most powerful, fast and user-friendly platform.</p>
          </div>
          <div class="row card-row">

            <div class="col-lg-4">
              <article class="entry card box-shadow hover-up">
                <div class="entry__img-holder card__img-holder">
                  <a href="single-post.html">
                    <img src="img/blog/post_1.jpg" class="entry__img" alt="">
                  </a>
       
                  <div class="entry__body card__body">                    
                    <h4 class="entry__title">
                      <a href="single-post.html">Effective Marketing for Start-Ups</a>
                    </h4>
                    <ul class="entry__meta">
                      <li class="entry__meta-category">
                        <i class="ui-category"></i>
                        <a href="#">Marketing</a>
                      </li>
                      <li class="entry__meta-comments">
                        <i class="ui-comments"></i>
                        <a href="#">3 Comments</a>
                      </li>
                    </ul>                     
                    <div class="entry__excerpt">
                      <p>Build a brand for your company using a specific color scheme and a professional logo designed with your business in mind.</p>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-lg-4">
              <article class="entry card box-shadow hover-up">
                <div class="entry__img-holder card__img-holder">
                  <a href="single-post.html">
                    <img src="img/blog/post_2.jpg" class="entry__img" alt="">
                  </a>
            
                  <div class="entry__body card__body">                    
                    <h4 class="entry__title">
                      <a href="single-post.html">Offer an Outrageous or Daily Deal</a>
                    </h4>
                    <ul class="entry__meta">
                      <li class="entry__meta-category">
                        <i class="ui-category"></i>
                        <a href="#">Marketing</a>
                      </li>
                      <li class="entry__meta-comments">
                        <i class="ui-comments"></i>
                        <a href="#">3 Comments</a>
                      </li>
                    </ul>                     
                    <div class="entry__excerpt">
                      <p>Build a brand for your company using a specific color scheme and a professional logo designed with your business in mind.</p>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-lg-4">
              <article class="entry card box-shadow hover-up">
                <div class="entry__img-holder card__img-holder">
                  <a href="single-post.html">
                    <img src="img/blog/post_3.jpg" class="entry__img" alt="">
                  </a>
          
                  <div class="entry__body card__body">                    
                    <h4 class="entry__title">
                      <a href="single-post.html">Investigate your Competition</a>
                    </h4>
                    <ul class="entry__meta">
                      <li class="entry__meta-category">
                        <i class="ui-category"></i>
                        <a href="#">Marketing</a>
                      </li>
                      <li class="entry__meta-comments">
                        <i class="ui-comments"></i>
                        <a href="#">3 Comments</a>
                      </li>
                    </ul>                     
                    <div class="entry__excerpt">
                      <p>Build a brand for your company using a specific color scheme and a professional logo designed with your business in mind.</p>
                    </div>
                  </div>
                </div>
              </article>
            </div>

          </div>
        </div>
      </section> <!-- end from blog -->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\GitHub\Heroku\agency\resources\views/Home/index.blade.php ENDPATH**/ ?>