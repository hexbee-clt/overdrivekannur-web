

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
      <div class="container">
      <div id="instafeed"></div>
      </div>
      <!-- <div id="instagram-feed1"></div> -->
      
      
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
      
      
  @push('test-push')
    
  <script src="{{ asset('web/js/InstagramFeed.min.js')}}"></script>
      
  <script>
    var feed = new Instafeed({
      accessToken: 'IGQVJYR0RaOTVBS0lHR0FoX2tyV0hVMjVaeXdvQUxPdGQ3Qk9WNFRRTlNHa3dJWWIwWTJPWjZAiU3N4Sk44UzBoa1p4dWplWUxwSW5WaUo2OFBrcUl3c1hxLVZANYUxVYU5hZA0o2R2ZAXT1luSHpBRzZAzRQZDZD',
      
    });

    feed.run();
  </script>
  @endpush
      
      @endsection()