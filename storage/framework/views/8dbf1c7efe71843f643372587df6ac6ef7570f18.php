


<?php $__env->startSection('content'); ?>

   
   
      
      <!--   search bar popup start   -->
      <div class="search-popup">
         <form class="search-form" action="#">
            <div class="form-element"><input type="text" placeholder="Type your search keyword"></div>
         </form>
         <div class="search-popup-overlay" id="searchOverlay"></div>
         <button class="search-close-btn" id="searchCloseBtn"><i class="fas fa-times"></i></button>
      </div>
      <!--   search bar popup end   -->  
      
          
      <!--  Breadcrumb Area Start  -->  
      <div class="breadcrumb-area breadcrumb-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrumb-txt">
                     <h1>404 NOT FOUND</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="breadcrumb-links">
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">404 Page</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="breadcrumb-overlay"></div>
      </div>
      <!--  Breadcrumb Area End  -->
      
      
      <!--    Error section start   -->
      <div class="error-section">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="not-found">
                     <img src="<?php echo e(asset('web/img/404.webp')); ?>" alt="">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="error-txt">
                     <div class="oops">
                        <img src="assets/img/oops.png" alt="">
                     </div>
                     <h2>You're lost...</h2>
                     <p>The page you are looking for might have been moved, renamed, or might never existed.</p>
                     <a href="<?php echo e(url('/')); ?>" class="go-home-btn">Back Home</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--    Error section end   -->
      
      
      <!--    Call to Action Area Start    -->
      <div class="cta-area cta-bg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-10">
                  <h2>We Are Here To Help With Your Transportation All Repair Needs</h2>
               </div>
               <div class="col-lg-2">
                  <a href="<?php echo e(url('contact')); ?>" class="cta-btn"><span>Contact Us</span></a>
               </div>
            </div>
         </div>
         <div class="cta-overlay"></div>
      </div>
      <!--    Call to Action Area End    -->
      
      
      
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.web-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Freelance\overdrive\laravel conversion\overdrive\resources\views/errors/404.blade.php ENDPATH**/ ?>