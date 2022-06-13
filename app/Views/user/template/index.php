<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>E-Learning</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?= base_url();?>/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?= base_url();?>/assets/admin/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="<?= base_url();?>/assets/admin/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?= base_url();?>/assets/admin/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?= base_url();?>/assets/admin/css/responsive.css">
       <!-- Full calendar -->
      <link href='<?= base_url();?>/assets/admin/fullcalendar/core/main.css' rel='stylesheet' />
      <link href='<?= base_url();?>/assets/admin/fullcalendar/daygrid/main.css' rel='stylesheet' />
      <link href='<?= base_url();?>/assets/admin/fullcalendar/timegrid/main.css' rel='stylesheet' />
      <link href='<?= base_url();?>/assets/admin/fullcalendar/list/main.css' rel='stylesheet' />

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


   </head>
   <body class="iq-page-menu-horizontal">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">

         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom d-flex align-items-center justify-content-between">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     
                     <img src="<?= base_url();?>/favicon.ico" class="img-fluid" alt="">
                    
                  </div>
               </div>
               <div class="iq-menu-horizontal">
                  <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu d-flex">

                     <?= $this->renderSection('menu'); ?>

                  </ul>
               </nav>
               </div>
               
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                 
                 <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                       <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                       <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                    </div>
                 </div>
                 <ul class="navbar-list">
                    <li>
                       <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                          <img src="<?= base_url();?>/assets/admin/img/foto_siswa/profile.png" class="img-fluid rounded mr-3" alt="user">
                          
                       </a>
                       <div class="iq-sub-dropdown iq-user-dropdown">
                          <div class="iq-card shadow-none m-0">
                             <div class="iq-card-body p-0 ">
                                <div class="bg-primary p-3">
                                   <h5 class="mb-0 text-white line-height"></h5>
                                </div>
                                
                                <a href="<?= base_url();?>/user/account-setting" class="iq-sub-card iq-bg-primary-hover">
                                   <div class="media align-items-center">
                                      <div class="rounded iq-card-icon iq-bg-primary">
                                         <i class="ri-account-box-line"></i>
                                      </div>
                                      <div class="media-body ml-3">
                                         <h6 class="mb-0 ">Account settings</h6>
                                         <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                      </div>
                                   </div>
                                </a>
                                <div class="d-inline-block w-100 text-center p-3">
                                   <a class="bg-primary iq-sign-btn" href="<?= base_url('logout');?>" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                </div>
                             </div>
                          </div>
                       </div>
                    </li>
                 </ul>
              </nav>
            </div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
               <?= $this->renderSection('content'); ?>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright 2020 <a href="#">Vito</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?= base_url();?>/assets/admin/js/jquery.min.js"></script>
      <script src="<?= base_url();?>/assets/admin/js/popper.min.js"></script>
      <script src="<?= base_url();?>/assets/admin/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/waypoints.min.js"></script>
      <script src="<?= base_url();?>/assets/admin/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/kelly.js"></script>
      <!-- Flatpicker Js -->
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <!-- Chart Custom JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="<?= base_url();?>/assets/admin/js/custom.js"></script>
   </body>
</html>