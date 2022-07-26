

@extends('layout.web-layout')
@section('content')

        <!--  Breadcrumb Area Start  -->  
        <div class="breadcrumb-area breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-txt">
                            <h1>About Company</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="breadcrumb-links">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-overlay"></div>
        </div>
        <!--  Breadcrumb Area End  -->


        <!--  Warranty Area Start  --> 
        <div class="warranty-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="about_bg"></div>
                    </div>
                    <div class="col-lg-6 offset-xl-1 col-xl-5">
                        <div class="section-title">
                            <h2>Our Services</h2>
                        </div>
                        <div class="warranty-txt">
                            <p>Over Drive is the Paragon of Detailing enterprise brings you a vast vary of auto care merchandise
from the fine businesses throughout the Globe. We carefully work with the High-end agencies that
focal point on manufacturing the products, barring compromising the quality. Blending the journey
with innovation and technology, our merchandise go past simply the remaining presentation and
best protection. It’s a aggressive world out there and developing a in no way lasting impact is
imperative for constructing lengthy time period enterprise relationships, so, our important focal
point revolves round bringing first-rate auto care techniques in south india.</p>
                        </div>
                        <a href="{{url('contact')}}" class="warranty-btn">SCHEDULE A REPAIR</a>
                    </div>
                </div>
                <div class="warranty-features">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-feature">
                                <div class="icon-wrapper">
                                    <img src="{{ asset('web/img/info_icon_1.webp')}}" alt="">
                                </div>
                                <div class="txt">
                                    <p>Over 15 years of experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-feature">
                                <div class="icon-wrapper">
                                    <img src="{{ asset('web/img/info_icon_2.webp')}}" alt="">
                                </div>
                                <div class="txt">
                                    <p>ASE Certified Master Technicians</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-feature">
                                <div class="icon-wrapper">
                                    <img src="{{ asset('web/img/info_icon_3.webp')}}" alt="">
                                </div>
                                <div class="txt">
                                    <p>FIVE BRANCHES IN KANNUR</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Warranty Area End  --> 


        <!--  Statistics Area Start  -->
        <div class="statistics-area about statistics-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-statistic">
                            <div class="icon-wrapper">
                                <i class="flaticon-electric-car"></i>
                            </div>
                            <h2><span class="counter">1250</span> +</h2>
                            <p>Car detailing</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-statistic">
                            <div class="icon-wrapper">
                                <i class="flaticon-steering-wheel"></i>
                            </div>
                            <h2><span class="counter">985</span> +</h2>
                            <p>Polishing</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-statistic">
                            <div class="icon-wrapper">
                                <i class="flaticon-settings"></i>
                            </div>
                            <h2><span class="counter">2500</span> +</h2>
                            <p>Car accessories</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-statistic">
                            <div class="icon-wrapper">
                                <i class="flaticon-break"></i>
                            </div>
                            <h2><span class="counter">2500</span> +</h2>
                            <p>Happy Clients</p>
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
                        <a href="{{url('contact')}}" class="cta-btn"><span>Contact Us</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!--    Call to Action Area End    -->


        @endsection()