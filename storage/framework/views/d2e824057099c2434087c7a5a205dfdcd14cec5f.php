<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Listing Agency By Goi Garg</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <!--<link rel="stylesheet" href="css/font-icons.css" />-->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
  <link rel="stylesheet" href="/css/style.css" />
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <!-- Favicons -->
  <link rel="shortcut icon" href="/favicon.ico">

</head>

<body>

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      "Loading..."
    </div>
  </div>

  <main class="main-wrapper">

    <!-- Navigation -->
    <header class="nav">
      <div class="nav__holder nav--sticky">
        <div class="container-fluid container-semi-fluid nav__container">
          <div class="flex-parent">

            <div class="nav__header">
              <!-- Logo -->
              <a href="/" class="logo-container flex-child">
                <h3> RentCars</h3>
              </a>

              <!-- Mobile toggle -->
              <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="nav__icon-toggle-bar"></span>
                <span class="nav__icon-toggle-bar"></span>
                <span class="nav__icon-toggle-bar"></span>
              </button> 
            </div>                      

            <!-- Navbar -->
            <nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse">
              <ul class="nav__menu">
                <li class="active">
                  <a href="/">Home</a>
                </li>
             
                <div class="nav__btn-holder nav--align-right">
                  <?php if(auth()->guard()->guest()): ?>
                  
                  <a href="/login" class="btn nav__btn">
                    <span class="nav__btn-text"> Log in </span>
                  </a>
                  <a href="/register" class="btn nav__btn">
                    <span class="nav__btn-text"> Register </span>
                  </a>
               <?php else: ?>
        
                <a class="btn nav__btn" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();">
                  <?php echo e(__('Logout')); ?>

                </a>
              </ul> <!-- end menu -->
            </nav> <!-- end nav-wrap -->


            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
            
              <?php endif; ?>
            
            </div>     
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->
<?php /**PATH E:\GitHub\Heroku\agency\resources\views/layouts/header.blade.php ENDPATH**/ ?>