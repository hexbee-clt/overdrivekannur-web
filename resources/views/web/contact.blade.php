

@extends('layout.web-layout')
@section('content')

        <!--  Breadcrumb Area Start  -->  
        <div class="breadcrumb-area breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-txt">
                            <h1>Contact us</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb-links">
                            <ul>
                                <li><a href="{{url('')}}">Home</a></li>
                                <li><a href="{{url('contact')}}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-overlay"></div>
        </div>
        <!--  Breadcrumb Area End  -->


        <!--   contact section start    -->
        <div class="contact-section">
            <div class="container">
                <!--  contact infos start  -->
                <div class="contact-infos">
                    <div class="row no-gutters">
                        <div class="col-lg-12 single-info-col" style="border:solid 1px orange">
                            <div class="row">
                                <div class="col-md-5 m-auto">
                                    <div class="single-info wow fadeInRight" data-wow-duration="1s">
                                        <div class="icon-wrapper"><i class="fa fa-h-square"></i></div>
                                        <div class="info-txt">
                                            <table>
                                                <tr>
                                                    <td style="vertical-align: baseline;"><i class="fa fa-map-marker" aria-hidden="true"></i></td>
                                                    <td>
                                                        <p>Rajafa Building</p>
                                                        <p>Near Capitol Mall,</p>
                                                        <p>Thalassery Road, Kannur-2</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="30"><i class="fa fa-envelope-open"></i></td>
                                                    <td><a href="mailto:overdrive.knr@gmail.com">overdrive.knr@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td width="30"><i class="fa fa-phone"></i></td>
                                                    <td><a href="tel:9744959509">9744 95 95 09</a></td>
                                                </tr>
                                                <tr>
                                                    <td width="30"><i class="fa fa-phone"></i></td>
                                                    <td><a href="tel:8547579509">8547 57 95 09</a></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 single-info-col">
                            <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                                <div class="icon-wrapper"><i class="fas fa-home"></i></div>
                                <div class="info-txt">
                                    <p>Opp: RTO Office, </p>
                                    <p>Town Hall Road, Thalassery</p>
                                    <a href="mailto:overdrive.tly@gmail.com">overdrive.tly@gmail.com</a> <br>
                                    <a href="tel:9061019444">9061 01 94 44</a> <br>
                                    <a href="tel:9544194444">9544 19 44 44</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 single-info-col">
                            <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                                <div class="icon-wrapper"><i class="fa fa-building"></i></div>
                                <div class="info-txt">
                                    <p>Near Dinesh Auditorium,</p>
                                    <p>Opposite Malabar Flat</p>
                                    <p>Thalassery Road, >Kannur 670002</p>
                                    <a href="tel:8137099525">8137 09 95 25</a> <br>
                                    <a href="tel:9847223211">9847 22 32 11</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 single-info-col">
                            <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                                <div class="icon-wrapper"><i class="fa fa-university"></i></div>
                                <div class="info-txt">
                                    <p>Masjid Complex,</p>
                                    <p>Nr Mukkum Tyres,</p>
                                    <p>Chirakkara,</p>
                                    <p>Talasseri-670102</p>
                                    <a href="tel:9061114333">9061 11 43 33</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 single-info-col">
                            <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                                <div class="icon-wrapper"><i class="fa fa-tachometer"></i></div>
                                <div class="info-txt">
                                    <p>Turtle wax  car Detailing & Ceramic coating studio  <br>
                                         Safa complex Dinesh auditorium road T. <br>
                                          k bus stop kannur. <br> 2 phone  9847223211.9744959509</p>
                                    
                                    <a href="tel:9061114333">9061 11 43 33</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  contact infos end  -->
                <!--  contact form and map start  -->
                <div class="contact-form-section">
                    <div class="row">
                        <div class="col-lg-6">
                            <span class="title">Contact</span>
                            <h2 class="subtitle">KEEP IN TOUCH</h2>
                            <form action="{{url('contact-save')}}" method="POST" id="myform" onsubmit="return contactform();">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-element"><input type="text" name="name" value="{{old('name')}}" id="name" placeholder="Name"></div>
                                 @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                 @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-element"><input type="text" value="{{old('email')}}" name="email" id="email" placeholder="Email"></div>
                                 @error('email')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                 @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-element"><input type="text" value="{{old('number')}}" name="number" id="phone" placeholder="Phone"></div>
                                 @error('number')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                 @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-element">
                                            <textarea cols="30" rows="10" name="message" placeholder="Comment" id="message">{{old('message')}}</textarea>
                                        </div>
                                 @error('message')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                 @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-element">
                                <div class="form-element mb-0"><button type="submit"><span>Submit</span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                <div style="background:white">
                    <div style="color:red" id="error_message">
                    <span id="field_error"></span>
                    </div>
</div>
                        </div>
                        <div class="col-lg-6">
                            <div class="map-wrapper">
                                <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3904.4422517209705!2d75.37646361519589!3d11.874262341215347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba43d2dd0739d21%3A0x9f9fc02f984c1ef3!2sOver%20Drive!5e0!3m2!1sen!2sin!4v1643959039851!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  contact form and map end  -->
            </div>
        </div>
        <!--   contact section end    -->


        @endsection()