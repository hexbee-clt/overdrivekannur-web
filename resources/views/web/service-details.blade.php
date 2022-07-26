

@extends('layout.web-layout')
@section('content')
        <!--  Breadcrumb Area Start  -->  
        <div class="breadcrumb-area breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-txt">
                            <h1>Service Details</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb-links">
                            <ul>
                                <li><a href="{{url('')}}">Home</a></li>
                                <li><a href="{{url('services')}}">Service Details</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-overlay"></div>
        </div>
        <!--  Breadcrumb Area End  -->


        <!--  Service Details Area Start  --> 
        <div class="service-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="body">
                            <div class="main-img">
                                <img src="assets/img/service_big.webp" alt="">
                            </div>
                            <div class="description-first">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="icon-wrapper">
                                            <i class="flaticon-battery"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <h2 class="title">Battery change</h2>
                                        <p>What does that mean for you? Peace of Mind. Whether your vehicle needs an oil change, factory recommended maintenance, or a major repair, knowing you have a qualified. </p>
                                        <p>Auto flex mechanic to work on it means never having to worry if the work is done right. We pride ourselves on providing every customer with quality auto service at a fair price- GUARANTEED!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="small-imgs">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-small-img">
                                            <img src="assets/img/service_small_1.webp" alt="" class="main">
                                            <div class="small-img-txt">
                                                <div class="img-wrapper">
                                                    <img src="assets/img/info_icon_1.webp" alt="">
                                                </div>
                                                <h4>Over 23 years of experience</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-small-img">
                                            <img src="assets/img/service_small_2.webp" alt="" class="main">
                                            <div class="small-img-txt">
                                                <div class="img-wrapper">
                                                    <img src="assets/img/info_icon_2.webp" alt="">
                                                </div>
                                                <h4>ASE Certified Master Technicians</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="description-second">
                                <p>What does that mean for you? Peace of Mind. Whether your vehicle needs an oil change, factory recommended maintenance, or a major repair, knowing you have a qualified. </p>
                                <p>Auto flex mechanic to work on it means never having to worry if the work is done right. We pride ourselves on providing every customer with quality auto service at a fair price- GUARANTEED!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-sidebar">
                            <div class="categories">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Battery
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">BATTERY CHANGE</a></li>
                                                    <li><a href="#">BATTERY REPAIR</a></li>
                                                    <li><a href="#">BATTERY CHARGE</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Belts
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Belt Change</a></li>
                                                    <li><a href="#">Belt Fix</a></li>
                                                    <li><a href="#">Belt Repair</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Brakes
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Brakes Change</a></li>
                                                    <li><a href="#">Brakes Fix</a></li>
                                                    <li><a href="#">Brakes Repair</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Diagnostics
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Parts replacement</a></li>
                                                    <li><a href="#">Wiring repair</a></li>
                                                    <li><a href="#">Cleaning of passages</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-support">
                                <div class="icon-wrapper">
                                    <i class="flaticon flaticon-headphones"></i>
                                </div>
                                <h3>Call us for any help</h3>
                                <h2>1-900-725-4567</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Service Details Area End  --> 


        <!--  Statistics Area Start  -->
        <div class="statistics-area about statistics-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-statistic">
                            <div class="icon-wrapper">
                                <i class="flaticon-electric-car"></i>
                            </div>
                            <h2><span class="counter">9,250</span> +</h2>
                            <p>Vehicles Repaired</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-statistic">
                            <div class="icon-wrapper">
                                <i class="flaticon-steering-wheel"></i>
                            </div>
                            <h2><span class="counter">1,250</span> +</h2>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-statistic">
                            <div class="icon-wrapper">
                                <i class="flaticon-settings"></i>
                            </div>
                            <h2><span class="counter">2,500</span> +</h2>
                            <p>Diagonistic Autos</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-statistic">
                            <div class="icon-wrapper">
                                <i class="flaticon-break"></i>
                            </div>
                            <h2><span class="counter">1,457</span> +</h2>
                            <p>Parts Recoveres</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statistics-overlay"></div>
        </div>
        <!--  Statistics Area End  -->


        <!--  Team Area Start  -->
        <div class="team-area">
            <div class="container">
                <div class="section-title">
                    <span>Over Drive</span>
                    <h2><b>meet the team</b></h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team">
                            <div class="img-wrapper"><img src="{{asset('web/img/team/IMG_3172.webp')}}" alt=""></div>
                            <div class="txt">
                                <h5>Sarath Kumar</h5>
                                <span>Head of director</span>
                            </div>
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team">
                            <div class="img-wrapper"><img src="{{asset('web/img/team/IMG_3166.webp')}}" alt=""></div>
                            <div class="txt">
                                <h5>Rahul Nayar</h5>
                                <span>MANAGING director</span>
                            </div>
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team">
                            <div class="img-wrapper"><img src="{{asset('web/img/team/IMG_3173.webp')}}" alt=""></div>
                            <div class="txt">
                                <h5>Biju Jacob</h5>
                                <span>MANAGING director</span>
                            </div>
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team">
                            <div class="img-wrapper"><img src="{{asset('web/img/team/IMG_3138.webp')}}" alt=""></div>
                            <div class="txt">
                                <h5>Man</h5>
                                <span>MANAGING director</span>
                            </div>
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Team Area End  -->


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