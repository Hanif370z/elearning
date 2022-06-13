<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> App landing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>/assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/gijgo.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/animated-headline.css">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/slick.css">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url();?>/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


<!-- Register -->

<main class="login-body" data-vide-bg="<?= base_url();?>/assets/img/login-bg.mp4">
    <!-- Login Admin -->
    
    <?= view('Myth\Auth\Views\_message_block') ?>
    
    <form class="form-default" action="<?= route_to('register') ?>" method="post">
    

        <div class="login-form mt-30">
            <!-- logo-login -->
            <div class="logo-login">
               <img src="<?= base_url();?>/assets/img/logo/loder.png" alt="">
            </div>
            <h2>Registration Here</h2>

            <?= csrf_field() ?>
            <div class="form-input">
            <label for="email"><?=lang('Auth.email')?></label>
                            <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                            <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
            </div>
            <div class="form-input">
                <label for="username">Username</label>
                <input  type="text" class="<?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
            </div>
            <div class="form-input">
                <label for="password">Password</label>
                <input type="password" name="password" class="<?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
            </div>
            <div class="form-input">
                <label for="pass_confirm">Confirm Password</label>
                <input type="password" name="pass_confirm" class="<?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
            </div>
            <div class="form-input pt-30">
                <input type="submit" name="submit" value="<?=lang('Auth.register')?>">
            </div>
            <!-- Forget Password -->
            
        </div>
    </form>
    <!-- /end login form -->
</main>


    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url();?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url();?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url();?>/assets/js/jquery.slicknav.min.js"></script>

    <!-- Video bg -->
    <script src="<?= base_url();?>/assets/js/jquery.vide.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url();?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url();?>/assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url();?>/assets/js/wow.min.js"></script>
    <script src="<?= base_url();?>/assets/js/animated.headline.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="<?= base_url();?>/assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="<?= base_url();?>/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="<?= base_url();?>/assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="<?= base_url();?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url();?>/assets/js/waypoints.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.countdown.min.js"></script>
    <script src="<?= base_url();?>/assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="<?= base_url();?>/assets/js/contact.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.form.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.validate.min.js"></script>
    <script src="<?= base_url();?>/assets/js/mail-script.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="<?= base_url();?>/assets/js/plugins.js"></script>
    <script src="<?= base_url();?>/assets/js/main.js"></script>
    
    </body>
</html>