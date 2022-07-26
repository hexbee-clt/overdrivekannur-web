


<?php $__env->startSection('content'); ?>
      
      <!--  Breadcrumb Area Start  -->  
      <div class="breadcrumb-area breadcrumb-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrumb-txt">
                     <h1>Gallery Grid</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="breadcrumb-links">
                     <ul>
                        <li><a href="<?php echo e(url('')); ?>">Home</a></li>
                        <li><a href="<?php echo e(url('gallery')); ?>">Gallery</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="breadcrumb-overlay"></div>
      </div>
      <!--  Breadcrumb Area End  -->
      
      
      <!--    Gallery section start   -->
      <section class="careers mt-5 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <h2 class="heading__subtitle color-body">We Prepare For The Future.</h2>
              <h3 class="heading__title color-black"><b>Inspire And Get Inspired By Professional Experts </b></h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="jobs-container">
            <?php if( count($career) >= 1): ?>
            <?php $__currentLoopData = $career; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $careers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
               <div class="job-item">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="job__meta">
                      <span class="job__type"><?php echo e($careers->location); ?></span>
                      <span class="job__location"><?php echo e($careers->category); ?></span>
                    </div>
                    <h4 class="job__title"><?php echo e($careers->title); ?></h4>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-5 letter-limit">
                    <div class="job__desc"><?php echo e($careers->description); ?></div>
                    
                    <?php 
                     $series = str_replace(' ', '-', $careers->title); 
                     $title = strtolower($series);
                    ?>  
                                          
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-3 d-flex align-items-center justify-content-end btn-wrap">
                    <a href="<?php echo e(url('careers-inner',$title)); ?>" class="warranty-btn">Read More</a>
                  </div>
                </div>
              </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php elseif(count($career) == 0): ?>
          <?php endif; ?>
               <div class="job-item">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     
          <img class="w-100" src="<?php echo e(asset('web/img/no_result.gif')); ?>" alt="">
                </div>
              </div>
                            
                            </div>
          </div>
        </div>
      </div>
    </section>
      <!--    Gallery section end   -->
      
      
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
<?php echo $__env->make('layout.web-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Freelance\overdrive\laravel conversion\overdrive\resources\views/web/careers.blade.php ENDPATH**/ ?>