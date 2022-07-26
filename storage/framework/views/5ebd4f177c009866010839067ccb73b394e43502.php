<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Over Drive</title>
<meta name="content" content="">
<meta name="description" content="">
<meta name="keywords" content="">
 <!-- opengraph -->
<meta property="og:locale" content="en_GB" />
<meta property="og:locale:alternate" content="fr_FR">
<meta property="og:locale:alternate" content="es_ES">
<meta property="og:type" content="website" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="<?php echo e(asset('web/img/hero_bg_2.webp')); ?>"/>
<meta property="og:url" content="https://overdriveknr.com/ " />
<meta property="og:site name" content="https://skillsacademi.com" />

<!-- twittercard -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="" />
<meta name="twitter:description" content="" />

<meta name="twitter:image" content="<?php echo e(asset('web/img/hero_bg_2.webp')); ?>" />
        <!-- favicon -->
 <link rel="apple-touch-icon" href="<?php echo e(asset('web/img/favicon.svg')); ?>" sizes="180x180">
 <link rel="icon" href="<?php echo e(asset('web/img/favicon.svg')); ?>" sizes="32x32" type="image/png">
 <link rel="icon" href="<?php echo e(asset('web/img/favicon.svg')); ?>" sizes="16x16" type="image/png">
        <!-- bootstrap css -->       
        <link rel="stylesheet" href="<?php echo e(asset('web/css/bootstrap.min.css')); ?>">
        <!-- flaticon css -->
        <link rel="stylesheet" href="<?php echo e(asset('web/css/flaticon.css')); ?>">
        <!-- fontawesome css -->
        <link rel="stylesheet" href="<?php echo e(asset('web/css/fontawesome.min.css')); ?>">
        <!-- owl carousel css -->
        <link rel="stylesheet" href="<?php echo e(asset('web/css/owl.carousel.min.css')); ?>">
        <!-- owl carousel theme css -->
        <link rel="stylesheet" href="<?php echo e(asset('web/css/owl.theme.default.min.css')); ?>">
        <!-- slicknav css -->
        <link rel="stylesheet" href="<?php echo e(asset('web/css/slicknav.css')); ?>">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo e(asset('web/css/style.css')); ?>">
      <!-- lightbox css -->
      <link rel="stylesheet" href="<?php echo e(asset('web/css/lightbox.min.css')); ?>">
        <!-- responsive css -->
        <link rel="stylesheet" href="<?php echo e(asset('web/css/responsive.css')); ?>">
        <!-- jquery js -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="<?php echo e(asset('web/js/jquery-1.10.2.min.js')); ?>"></script>
        <?php echo toastr_css(); ?>
    </head>


    
    <body>
        <!--  Header Section Start  -->
        <div class="header-section home-2 py-lg-0 py-4">
            <div class="row align-items-center position-relative">
                <div class="col-lg-3 col-xl-2 col-6">
                    <a class="logo-wrapper" href="<?php echo e(url('')); ?>"><img src="<?php echo e(asset('web/img/logo-2.svg')); ?>" alt=""></a>
                </div>
                <div class="col-lg-8 col-xl-8 d-lg-block d-none">
                    <div class="nav-area">
                        <div class="main-menu">
                            <nav>
                                <ul class="menus" id="mainMenu">
                                        <li class=" active">
                                           <a href="<?php echo e(url('/')); ?>" class="parent-link">Home</a>
                                        </li>
                                    <li><a href="<?php echo e(url('about')); ?>" class="parent-link">About Us </a></li>
                                    <li class="">
                                        <a href="<?php echo e(url('services')); ?>" class="parent-link">Service</a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo e(url('gallery')); ?>" class="parent-link">Gallery</a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo e(url('careers')); ?>" class="parent-link">Careers</a>
                                    </li>
                                    <li><a href="<?php echo e(url('contact')); ?>" class="parent-link">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-xl-2 col-6 position-static">
                    <div id="mobileMenu"></div>
                    <ul class="search-cart">
                        <li class="search-icon"><a href="#"><i class="flaticon-magnifying-glass"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--  Header Section End  -->


        <!--   search bar popup start   -->
        <div class="search-popup">
            <form class="search-form" action="#">
                <div class="form-element"><input type="text" placeholder="Type your search keyword"></div>
            </form>
            <div class="search-popup-overlay" id="searchOverlay"></div>
            <button class="search-close-btn" id="searchCloseBtn"><i class="fas fa-times"></i></button>
        </div>
        <!--   search bar popup end   -->   

<?php echo $__env->yieldContent('content'); ?>


        <!--    Footer Area Start    -->
        <footer>
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <a class="logo-wrapper" href="<?php echo e(url('')); ?>"><img src="<?php echo e(asset('web/img/logo-3.webp')); ?>" alt=""></a>
                            <p class="txt">Over Drive is the Paragon of Detailing enterprise brings you a vast vary of auto care merchandise
                        from the fine businesses throughout the Globe.</p>
                        <ul class="footerlink mt-3">
                            <li><a href=""><i class="fa fa-facebook red-color" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram red-color" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-google red-color" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-whatsapp red-color" aria-hidden="true"></i></a></li>
                        </ul>
                        </div>
                        <div class="col-xl-3 offset-xl-1 col-lg-2 col-md-3">
                            <h4>Useful Links</h4>
                            <ul class="links">
                                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li><a href="<?php echo e(url('about')); ?>">About us</a></li>
                                <li><a href="<?php echo e(url('services')); ?>">Service</a></li>
                                <li><a href="<?php echo e(url('gallery')); ?>">Gallery</a></li>
                                <li><a href="<?php echo e(url('contact')); ?>">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <h4>Contact Us</h4>
                            <div class="contact-infos">
                                <div class="single-info">
                                    <div class="icon-wrapper"><i class="flaticon-placeholder"></i></div>
                                    <p>Rajafa Building, Near Capitol Mall, Thalassery Road, Kannur-2</p>
                                </div>
                                <div class="single-info">
                                    <div class="icon-wrapper"><i class="flaticon-phone-auricular-hand-drawn-ringing-tool-outline"></i></div>
                                    <p>+91 9744 95 95 09</p>
                                </div>
                                <div class="single-info">
                                    <div class="icon-wrapper"><i class="flaticon-message"></i></div>
                                    <p>overdrive.knr@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>© Copyrights 2022 Over Drive. All rights reserved. </p>
                </div>
            </div>
        </footer>
        <!--    Footer Area End    -->


        <!-- back to top area start -->
        <div class="back-to-top">
            <i class="fas fa-chevron-up"></i>
        </div>
        <!-- back to top area end -->


        <!-- preloader start -->
        <div class="preloader">
            <div class="loading-window">
                <div class="car">
                    <div class="strike"></div>
                    <div class="strike strike2"></div>
                    <div class="strike strike3"></div>
                    <div class="strike strike4"></div>
                    <div class="strike strike5"></div>
                    <div class="car-detail spoiler"></div>
                    <div class="car-detail back"></div>
                    <div class="car-detail center"></div>
                    <div class="car-detail center1"></div>
                    <div class="car-detail front"></div>
                    <div class="car-detail wheel"></div>
                    <div class="car-detail wheel wheel2"></div>
                </div>
                <div class="text">
                    <span>Loading</span><span class = "dots">...</span>
                </div>
            </div>
        </div>
        <!-- preloader end -->    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+918547579509" class="float" target="_blank">
<!-- <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank"> -->
<i class="fa fa-whatsapp my-float"></i>
</a>


        <!-- popper js -->
        <script src="<?php echo e(asset('web/js/popper.min.js')); ?>"></script>    
        <!-- bootstrap js -->
        <script src="<?php echo e(asset('web/js/bootstrap.min.js')); ?>"></script>
        <!-- owl carousel js -->
        <script src="<?php echo e(asset('web/js/owl.carousel.min.js')); ?>"></script>
        <?php echo $__env->yieldPushContent('test-push'); ?>
        <!-- waypoints js -->
        <script src="<?php echo e(asset('web/js/waypoints.min.js')); ?>"></script>
        <!-- counterup js -->
        <script src="<?php echo e(asset('web/js/jquery.counterup.min.js')); ?>"></script>
        <!-- ripple js -->
        <script src="<?php echo e(asset('web/js/jquery.ripples-min.js')); ?>"></script>
        <!-- slicknav js -->
        <script src="<?php echo e(asset('web/js/jquery.slicknav.min.js')); ?>"></script>
        <!-- main js -->
        <script src="<?php echo e(asset('web/js/main.js')); ?>"></script>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php echo $__env->yieldPushContent('test-push'); ?>
    </body>


    
    <?php echo jquery(); ?>
    <?php echo toastr_js(); ?>
    <?php echo app('toastr')->render(); ?>
</html><?php /**PATH E:\larave\overdrive\resources\views/layout/web-layout.blade.php ENDPATH**/ ?>