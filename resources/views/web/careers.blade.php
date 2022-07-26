

@extends('layout.web-layout')
@section('content')
      
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
                        <li><a href="{{url('')}}">Home</a></li>
                        <li><a href="{{url('gallery')}}">Gallery</a></li>
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
            @if ( count($career) >= 1)
            @foreach ($career as $careers) 
               <div class="job-item">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="job__meta">
                      <span class="job__type">{{$careers->location}}</span>
                      <span class="job__location">{{$careers->category}}</span>
                    </div>
                    <h4 class="job__title">{{$careers->title}}</h4>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-5 letter-limit">
                    <div class="job__desc">{{$careers->description}}</div>
                    
                    <?php 
                     $series = str_replace(' ', '-', $careers->title); 
                     $title = strtolower($series);
                    ?>  
                                          
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-3 d-flex align-items-center justify-content-end btn-wrap">
                    <a href="{{url('careers-inner',$title)}}" class="warranty-btn">Read More</a>
                  </div>
                </div>
              </div>
                            @endforeach
          @elseif(count($career) == 0)
          @endif
               <div class="job-item">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     
          <img class="w-100" src="{{asset('web/img/no_result.gif')}}" alt="">
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
                        <a href="{{url('contact')}}" class="cta-btn"><span>Contact Us</span></a>
               </div>
            </div>
         </div>
         <div class="cta-overlay"></div>
      </div>
      <!--    Call to Action Area End    -->
      
      
      @endsection()