(function ($) {
    "use strict";
    jQuery(document).ready(function ($) {

        // review carousel (home 1)
        $('.review-carousel').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            dots: false,
            nav: false,
            mouseDrag: true,
            autoplayHoverPause: true
        });

        // review carousel (home 2)
        $('.review-carousel-2').owlCarousel({
            loop: true,
            autoplay: true,
            dots: true,
            nav: false,
            mouseDrag: true,
            margin: 30,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
            }
        });

        // Partner carousel
        $('.partner-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplaySpeed: 500,
            autoplayHoverPause: true,
            dots: false,
            margin: 30,
            thumbs: false,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 3
                },
                992: {
                    items: 5
                },
            }
        });

        // hero carousel
        $('.hero-carousel').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 8000,
            autoplaySpeed: 2000,
            dots: true,
            nav: false,
            mouseDrag: true,
            smartSpeed: 2000,
            animateOut: 'fadeOut'
        });        
        
        // Project details carousel
        $('.project-carousel').owlCarousel({
            loop: true,
            dots: false,
            nav: true,
            navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
            autoplay: false,
            items: 1
        });

        // background video initialization for home 7
        if ($("#bgndVideo7").length > 0) {
            $("#bgndVideo7").YTPlayer();
        }

        // background video initialization for home 8
        if ($("#bgndVideo8").length > 0) {
            $("#bgndVideo8").YTPlayer();
        }

        // background video initialization for home 9
        if ($("#bgndVideo9").length > 0) {
            $("#bgndVideo9").YTPlayer();
        }        


        // ripple effect initialization for home 13
        if ($("#heroHome14").length > 0) {
            $('#heroHome14').ripples({
                resolution: 500,
                dropRadius: 20,
                perturbance: 0.01
            });
        }
    
        
        // quickview product slider with thumbnail
        $('.quickview-slider').owlCarousel({
            autoplay: true,
            autoplayTimeout: 8000,
            smartSpeed: 1500,
            loop: true,
            autoplayHoverPause: true,
            items: 1,
            center: true,
            dots: false,
            thumbs: true,
            thumbImage: false,
            thumbsPrerendered: true,
            thumbContainerClass: 'owl-thumbs',
            thumbItemClass: 'owl-thumb-item',
        });

        // Product thumbnail sliders
        $('.product-thumb-slider').owlCarousel({
            loop: false,
            dots: false,
            nav: true,
            navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
            autoplay: false,
            margin: 5,
            responsive: {
                0: {
                    items: 4
                }
            }
        });

        // product image zoom initialization function
        function initzoom() {
            if ($('.easyzoom').length > 0) {
                var $easyzoom = $('.easyzoom').easyZoom();
            }
        }


        // Product preview
        if ($('.product-details .product-preview').length > 0) {
            let activeSmallSrc = $('.product-details .product-thumb-slider .single-product').eq(0).find('img.small').attr('src');
            let activeBigSrc = $('.product-details .product-thumb-slider .single-product').eq(0).find('img.big').attr('src');
            $('.product-details .product-preview').find('a').attr('href', activeBigSrc);
            $('.product-details .product-preview').find('img').attr('src', activeSmallSrc);

            $('.product-details .product-thumb-slider img.small').on('click', function () {
                let currimg = `<div class="easyzoom easyzoom--overlay">
                                <a href="${$(this).siblings('img.big').attr('src')}">
                                    <img class="single-image" src="${$(this).attr('src')}" alt=""/>
                                </a>
                              </div>`;
                $('.product-details .product-preview').html(currimg);
                initzoom();
            });
        }

        // initialize product image zoom 
        initzoom();

        // tilt js initialization
        if ($('.js-tilt').length > 0) {
            $('.js-tilt').tilt({
                glare: true,
                maxGlare: .5
            })
        }

        // search popup show
        $("li.search-icon a").on('click', function (e) {
            e.preventDefault();
            $(".search-popup").addClass('popup');
        });

        // search popup remove
        $("#searchCloseBtn, .search-popup-overlay").on('click', function () {
            $(".search-popup").removeClass('popup');
        });


        // jquery counter initialization
        if ($('.counter').length > 0) {
            $('.counter').counterUp({
                delay: 10,
                time: 2000
            });
        }

        // show shipping address form if not same as billing address
        if ($('input#sameStatus').length > 0) {
            $('input#sameStatus').on('change', function () {
                if ($('input#sameStatus').prop('checked') == false) {
                    $("#shippingAddress").addClass('d-block');
                } else {
                    $("#shippingAddress").removeClass('d-block');
                }
            });
        }

        // Back to top
        $('.back-to-top').on('click', function () {
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
        });

        // slicknav initialization
        $('#mainMenu').slicknav({
            prependTo: '#mobileMenu'
        });


    });


    $(window).on('scroll', function () {
        // sticky menu activation
        if ($(window).scrollTop() > 180) {
            if ($('.header-section').hasClass('home-2')) {
                $('.header-section.home-2').addClass('sticky-navbar');
            } else if ($('.nav-area').parents('.home-3')) {
                $('.nav-area').addClass('sticky-navbar');
            } else {
                $('.nav-area').addClass('sticky-navbar');
            }

        } else {
            if ($('.header-section').hasClass('home-2')) {
                $('.header-section.home-2').removeClass('sticky-navbar');
            } else if ($('.nav-area').parents('.home-3')) {
                $('.nav-area').removeClass('sticky-navbar');
            } else {
                $('.nav-area').removeClass('sticky-navbar');
            }
        }

        // back to top button fade in / fade out
        if ($(window).scrollTop() > 1000) {
            $('.back-to-top').addClass('show');
        } else {
            $('.back-to-top').removeClass('show');
        }
    });


    jQuery(window).on('load', function () {
        // preloader fadeout onload
        $(".preloader").addClass('loader-fadeout');
        
        // isotope initialize
        if($('.grid').length > 0) {
            $('.grid').isotope({
                // set itemSelector so .grid-sizer is not used in layout
                itemSelector: '.single-pic',
                percentPosition: true,
                masonry: {
                    // set to the element
                    columnWidth: '.grid-sizer'
                }
            });            
        }        
    });

}(jQuery));




function quotationform(){
    var name = document.getElementById("name").value;
    var subject = document.getElementById("category").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    
    error_message.style.padding = "10px";
    
    var text;
    if(name.length < 5){
      text = "Please Enter valid Name";
      error_message.innerHTML = text;
      return false;
    }
    if(subject.length < 1){
      text = "Please Select Services";
      error_message.innerHTML = text;
      return false;
    }
    if(isNaN(phone) || phone.length != 10){
      text = "Please Enter valid Phone Number";
      error_message.innerHTML = text;
      return false;
    }
    if(email.indexOf("@") == -1 || email.length < 6){
      text = "Please Enter valid Email";
      error_message.innerHTML = text;
      return false;
    }
    if(message.length <= 140){
      text = "Please Enter More Than 140 Characters";
      error_message.innerHTML = text;
      return false;
    }
    alert("Form Submitted Successfully!");
    return true;
  }
function contactform(){
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    
    error_message.style.padding = "10px";
    
    var text;
    if(name.length < 5){
      text = "Please Enter valid Name";
      error_message.innerHTML = text;
      return false;
    }
    if(email.indexOf("@") == -1 || email.length < 6){
      text = "Please Enter valid Email";
      error_message.innerHTML = text;
      return false;
    }
    if(isNaN(phone) || phone.length != 10){
      text = "Please Enter valid Phone Number";
      error_message.innerHTML = text;
      return false;
    }
    if(message.length <= 100){
      text = "Please Enter More Than 100 Characters";
      error_message.innerHTML = text;
      return false;
    }
    alert("Form Submitted Successfully!");
    return true;
  }