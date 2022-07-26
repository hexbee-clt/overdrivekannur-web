

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
                        <li><a href="{{url('contact')}}">Gallery</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="breadcrumb-overlay"></div>
      </div>
      <!--  Breadcrumb Area End  -->
      
            @foreach ($career_details as $careers) 
            <div class="container">
               <div class="row mt-5 mb-5">
                  <div class="col-md-12">
                     <h3 style="color:black"><b>{{$careers->title}}</b></h3>
                     <h6>{{$careers->category}}</h6>
                     <h6>Pay From : {{$careers->payfrom}}</h6>
                     <h6>Pay To : {{$careers->payto}}</h6>
                     <!-- <br> -->
                     <br>
                     <p>{{$careers->description}}</p>
                    <a  data-toggle="modal" data-target="#exampleModal" href="" class="warranty-btn">Apply Now</a>
                    
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                           <h5 class="modal-title color-black" id="exampleModalLabel"><b>Apply Now</b></h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                           </div>
                           <div class="modal-body">
                           <form action="{{url('careers-save')}}" id="post-form" method="post" class="contact-form-section" enctype="multipart/form-data" style="margin-top:0px">
                              @csrf

                              <input type="hidden" value="{{$careers->id}}" name="id">
                              <input type="hidden" value="{{$careers->title}}"  name="title">
                              <div class="row">
                              <div class="col-md-12">
                                    <div class="form-element">
                                       <input type="text" name="name" placeholder="Name"  onkeypress="return /[a-z]/i.test(event.key)">
                                    </div>
                                 @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                 @enderror
                              </div>
                              <div class="col-md-12">
                                    <div class="form-element">
                                       <input type="text" name="number" placeholder="Phone Number">
                                    </div>
                                 @error('number')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                 @enderror
                              </div>
                              
                              <div class="col-md-12">
                                    <div class="form-element">
                                       <input type="email" name="email" placeholder="Email">
                                    </div>
                                 @error('email')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                 @enderror
                              </div>
                              <div class="col-md-12">
                                    <div class="form-element">
                                       <input type="file" name="file" placeholder="Name">
                                    </div>
                                 @error('file')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                 @enderror
                              </div>
                              <div class="col-md-12">
                              </div>
                              <div class="col-md-12 d-flex">
                                        <div class="form-element m-auto">
                                            <button type="submit" class=" btn__block"><span>Submit</span></button>
                                        </div>
                                    </div>
                              </div>
                           </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
                            @endforeach
      
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
      
      @endsection()

      <script>
         
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  
  
     if ($("#post-form").length > 0) {
      $("#post-form").validate({
        
      rules: {
        name: {
          required: true,
          maxlength: 50,
        },
        body: {
          required: true,
          maxlength: 250
        },
        number: {
          required: true,
          // maxlength: 12,
          minlength:10  
        }
      
      },
      messages: {
        name: {
          required: "This Field Is Required",
          minlength: "Your last name maxlength should be 50 characters long."
        },
        number: {
          required: "This Field Is Required",
          // maxlength: "Your last body maxlength should be 12 characters long.", 
          minlength: "Invalid Phone number",
          char: "no Character is allowed"
        },
      },
    })
  }
  // contact form
  
  $('#element').tooltip('show')
      </script>