

@extends('layout.web-layout')
@section('content')

        <!--  Breadcrumb Area Start  -->  
        <div class="breadcrumb-area breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-txt">
                            <h1>F.A.Q</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb-links">
                            <ul>
                                <li><a href="{{url('')}}">Home</a></li>
                                <li><a href="{{url('faq')}}">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-overlay"></div>
        </div>
        <!--  Breadcrumb Area End  -->


<!--   FAQ section start   -->
<div class="faq-section">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="accordion" id="accordionExample1">
               <div class="card">
                  <div class="card-header" id="headingOne">
                     <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        How Often Should I Get an Oil Change?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1">
                     <div class="card-body">
                        The consensus agrees that a driver should get an oil change every 3,000 to 7,000 miles or every three months. However, you can always refer to your owner's manual which covers the recommended oil change interval for your specific make and model. Many of today's newer vehicles will actually tell you when they are due for service. Remember: an oil change is essential because it acts as a lubricant for the internal cogs and gears under the hood. Without it, oil can turn into sludge and prohibit your vehicle from operating correctly.
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingTwo">
                     <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How Often Should I Check My Vehicle's Fluid Levels?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample1">
                     <div class="card-body">
                        Aside from engine oil, there are many other fluids that are vital to the health of your vehicle. Some examples include the transmission fluid, brake fluid, engine coolant, and power-steering fluid. Their levels are not only affected by how frequently you drive but extreme temperatures as well. As such, specialists advise checking them at the same time as your oil change or every month or two.
                     </div>
                  </div>
               </div> 
               <div class="card">
                  <div class="card-header" id="headingThree">
                     <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How Often Should I Change My Air Filter?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample1">
                     <div class="card-body">
                        Typically, there are two filters in a vehicle. One is for the engine and the other is for the cabin. A dirty filter can prevent airflow, limiting the engine's ability to expend hot air and inhibiting clean air to pass through. How often you need to change it varies, though the conventional timeframe is about 30,000 miles, which is why the best way to determine that it needs a replacement is to check it periodically. Fortunately, replacing a filter is a quick and easy process.
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingFour">
                     <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        When Should I Replace My Brake Pads?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample1">
                     <div class="card-body">
                        On average, brake pads begin to wear out around the 20,000- to 30,000-mile mark, but there are many factors that may impact this figure. Knowing what signs to look out for will therefore prove instrumental in detecting when your brake pads need to be replaced. If you feel your vehicle taking longer to come to a stop or notice a high-pitch screeching or grinding noise when braking, scheduling a checkup is integral. Running with worn brake pads will eventually affect the rotors, which can be a costly repair, so taking a proactive approach will not only keep you safe but save you money as well.
                     </div>
                  </div>
               </div>              
            </div>
         </div>
         <div class="col-lg-6">
            <div class="accordion" id="accordionExample2">
               <div class="card">
                  <div class="card-header" id="headingFive">
                     <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        When Should I Replace My Car Battery?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample2">
                     <div class="card-body">
                        The standard battery is projected to last three to five years, but variables like hot and cold weather can influence its longevity, so it is best to keep an eye out for signs your battery power is declining. If your headlights and dashboard lights are starting to dim or if your vehicle has difficulty starting, these are clues that your vehicle may be due for a battery replacement.
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingSix">
                     <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        When Should I Get a Tire Rotation?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample2">
                     <div class="card-body">
                        As the main point of contact with the pavement, tires are subject to the most wear and tear. This is especially true if you utilize your vehicle for off-roading or have a two-wheel drive system which puts most of the labor on a specific set of wheels. That being the case, having your tires rotated every six months or around 6,000 to 8,000 miles is a good rule to uphold. Doing so will ensure your tires wear evenly.
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingSeven">
                     <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        How Much Air Pressure Should I Put into My Tires?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample2">
                     <div class="card-body">
                        The amount of pressure a tire requires depends on its type and the vehicle. You can find out the optimum air pressure either printed on the door jamb, the side-wall of the tires, or in your owner's manual. Too much pressure can make it difficult for you to maneuver your vehicle while too little pressure can result in a blow-out. You can always speak with a product expert to determine what pressure levels are most appropriate.
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingEight">
                     <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        How Often Should I Get an Oil Change?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample2">
                     <div class="card-body">
                        The consensus agrees that a driver should get an oil change every 3,000 to 7,000 miles or every three months. However, you can always refer to your owner's manual which covers the recommended oil change interval for your specific make and model. Many of today's newer vehicles will actually tell you when they are due for service. Remember: an oil change is essential because it acts as a lubricant for the internal cogs and gears under the hood. Without it, oil can turn into sludge and prohibit your vehicle from operating correctly.
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingNine">
                     <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        How Often Should I Check My Vehicle's Fluid Levels?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample2">
                     <div class="card-body">
                        Aside from engine oil, there are many other fluids that are vital to the health of your vehicle. Some examples include the transmission fluid, brake fluid, engine coolant, and power-steering fluid. Their levels are not only affected by how frequently you drive but extreme temperatures as well. As such, specialists advise checking them at the same time as your oil change or every month or two.
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--   FAQ section end   -->


        <!--    Call to Action Area Start    -->
        <div class="cta-area cta-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-10">
                        <h2>We Are Here To Help With Your Transportation All Repair Needs</h2>
                    </div>
                    <div class="col-lg-2">
                        <a href="contact.html" class="cta-btn"><span>Contact Us</span></a>
                    </div>
                </div>
            </div>
            <div class="cta-overlay"></div>
        </div>
        <!--    Call to Action Area End    -->


        <!--  Partner Area Start  -->
        <div class="partner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="partner-carousel owl-carousel owl-theme border-bottom border-top-lg-0">
                            <div class="single-partner-item">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="assets/img/partner-1.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="single-partner-item">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="assets/img/partner-2.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="single-partner-item">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="assets/img/partner-3.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="single-partner-item">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="assets/img/partner-4.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="single-partner-item">
                                <div class="outer">
                                    <div class="inner">
                                        <img src="assets/img/partner-5.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Partner Area End  -->

        @endsection()