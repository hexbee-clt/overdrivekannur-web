<!doctype html>
<html lang="en">

    
<head>
        
        <meta charset="utf-8" />
        <title>Over Drive</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

        <!-- <link href="assets/libs/%40fullcalendar/core/main.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/%40fullcalendar/daygrid/main.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/%40fullcalendar/bootstrap/main.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/%40fullcalendar/timegrid/main.min.css" rel="stylesheet" type="text/css" /> -->

        
      <link rel="stylesheet" href="{{ asset('web/css/lightbox.min.css') }}">
        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('admin/css/preloader.min.css') }}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <!-- style Css-->
        <link href="{{ asset('admin/css/style.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        @toastr_css
    </head>
<body>
    <div id="layout-wrapper">
       
            <!-- <?php session_start(); ?> -->
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index" class="logo logo-dark">
                                <span class="logo-sm">
                                    
                                    <!-- <img src="assets/images/logo-sm.svg" alt="" height="24"> -->
                                </span>
                                <span class="logo-lg">
                                     <span class="logo-txt">Over Drive</span>
                                </span>
                            </a>

                            <a href="index" class="logo logo-light">
                                <span class="logo-sm">
                                    
                                    <!-- <img src="assets/images/logo-sm.svg" alt="" height="24"> -->
                                </span>
                                <span class="logo-lg">
                                     <span class="logo-txt">Over Drive</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="search" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar"> -->
                                <span class="d-none d-xl-inline-block ms-1 fw-medium"> {{ Auth::user()->name }} </span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <!-- <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock Screen</a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                                
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <!-- <li class="menu-title" data-key="t-menu">Menu</li> -->
                            <li>
                                <a href="{{url('home')}}" >
                                <i class="bx bxs-dashboard"></i>
                                    <span data-key="t-email">dashboard</span>
                                </a>
                                <!-- <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="add-gallery" data-key="t-inbox">Add gallery</a></li>
                                    <li><a href="view-gallery" data-key="t-read-email">View</a></li>
                                </ul> -->
                            </li>
        
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-image-add"></i>
                                    <span data-key="t-email">Gallery</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{url('add-gallery')}}" data-key="t-inbox">Add gallery</a></li>
                                    <li><a href="{{url('view-gallery')}}" data-key="t-read-email">View</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                <i class="fas fa-user-cog"></i>
                                    <span data-key="t-email">Careers</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{url('add-careers')}}" data-key="t-inbox">Add Careers</a></li>
                                    <li><a href="{{url('view-careers')}}" data-key="t-read-email">View</a></li>
                                    <li><a href="{{url('view-inquiry')}}" data-key="t-read-email">View Inquiry</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                <i class=" fab fa-quora"></i>
                                    <span data-key="t-email">Quote</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{url('view-quote')}}" data-key="t-inbox">View Quote</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                <i class="fab fa-contao"></i>
                                    <span data-key="t-email">Contactus  </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{url('view-contact')}}" data-key="t-read-email">View</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            
@yield('content')



<footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © 
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by <a href="https://cremountdigital.com/" class="text-decoration-underline">Cremount Digital Solutions </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center bg-dark p-3">

                    <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <h6 class="mb-3">Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>

                </div>

            </div> 
        </div>

        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('admin/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('admin/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('admin/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('admin/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{ asset('admin/libs/feather-icons/feather.min.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{ asset('admin/js/pages/datatables.init.js')}}"></script>   
        <!-- pace js -->
        <script src="{{ asset('admin/libs/pace-js/pace.min.js')}}"></script>

        <!-- pristine js -->
        <script src="{{ asset('admin/libs/pristinejs/pristine.min.js')}}"></script>
        <!-- form validation -->
        <script src="{{ asset('admin/js/pages/form-validation.init.js')}}"></script>
      <!-- lightbox js -->
      <script src="{{ asset('web/js/lightbox.min.js')}}"></script>

        <script src="{{ asset('admin/js/app.js')}}"></script> 
<script>
    function image() {
    //Get reference of FileUpload.
    var fileUpload = document.getElementById("fileUpload");
 
    //Check whether the file is valid Image.
    var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.webp)$");
    if (regex.test(fileUpload.value.toLowerCase())) {
 
        //Check whether HTML5 is supported.
        if (typeof (fileUpload.files) != "undefined") {
            //Initiate the FileReader object.
            var reader = new FileReader();
            //Read the contents of Image File.
            reader.readAsDataURL(fileUpload.files[0]);
            reader.onload = function (e) {
                //Initiate the JavaScript Image object.
                var image = new Image();
 
                //Set the Base64 string return from FileReader as source.
                image.src = e.target.result;
                       
                //Validate the File Height and Width.
                image.onload = function () {
                    var height = this.height;
                    var width = this.width;
                    if (height  != width ) {
                        alert("Height and Width must be 1500px*1500px.");
                        return false;
                    }else if(height < 1500 || width < 1500){
                        alert("Height and Width must be 1500px*1500px.");

                    }
                    // alert("Uploaded image has valid Height and Width.");
                    // return true;
                };
 
            }
        } else {
            alert("This browser does not support HTML5.");
            return false;
        }
    } else {
        alert("Please select a valid Image file.");
        return false;
    }
}

function url() {
    //Get reference of FileUpload.
    var fileUpload = document.getElementById("eerht1");
 
    //Check whether the file is valid Image.
    var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.webp)$");
    if (regex.test(fileUpload.value.toLowerCase())) {
 
        //Check whether HTML5 is supported.
        if (typeof (fileUpload.files) != "undefined") {
            //Initiate the FileReader object.
            var reader = new FileReader();
            //Read the contents of Image File.
            reader.readAsDataURL(fileUpload.files[0]);
            reader.onload = function (e) {
                //Initiate the JavaScript Image object.
                var image = new Image();
 
                //Set the Base64 string return from FileReader as source.
                image.src = e.target.result;
                       
                //Validate the File Height and Width.
                image.onload = function () {
                    var height = this.height;
                    var width = this.width;
                    if (height  != width ) {
                        alert("Height and Width must be 1500px*1500px.");
                        return false;
                    }else if(height < 1500 || width < 1500){
                        alert("Height and Width must be 1500px*1500px.");

                    }
                    // alert("Uploaded image has valid Height and Width.");
                    // return true;
                };
 
            }
        } else {
            alert("This browser does not support HTML5.");
            return false;
        }
    } else {
        alert("Please select a valid Image file.");
        return false;
    }
}



function two(){
    document.getElementById("tworadio").style.display = "flex";
    $('#eno1').prop('disabled', true);
    $('#eno2').prop('disabled', true);
    $('#eerht1').prop('disabled', true);
    $('#eerht2').prop('disabled', true);
    document.getElementById("threeradio").style.display = "none";
    // document.getElementById("eno").style.display = "disable";
    $('#fileUpload').prop('disabled', false);
}

function three(){
    document.getElementById("threeradio").style.display = "flex";
    document.getElementById("tworadio").style.display = "none";
    $('#fileUpload').prop('disabled', true);
    // document.getElementById("eno").style.display = "disable";
    $('#eerht1').prop('disabled', false);
    $('#eerht2').prop('disabled', false);
}

</script>


        <!-- ckeditor -->
        <script src="{{ asset('admin/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>

        <!-- init js -->
        <!-- <script src="{{ asset('admin/js/pages/form-editor.init.js')}}"></script> -->


        @jquery
    @toastr_js
    @toastr_render
</body>
</html>
