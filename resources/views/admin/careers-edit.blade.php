
@extends('layout.admin-layout')
@section('content')
<div class="main-content">

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Edit Careers</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Edit Careers</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <!-- end card header -->
                                    <div style="display:none">
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <!-- <h5 class="card-title mb-4">Validation Examples</h5> -->  
                                @foreach ($careers as $career) 
                                            <form class="needs-validation" method="post" action="{{ url('update-careers',$career->id) }}" enctype="multipart/form-data" novalidate>
                                                @csrf
                                                <input type="hidden"/>
                                                <div class="row">
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Title</label>
                                                            <input type="text" name="title" value="{{$career->title}}" required class="form-control" placeholder="Add Title" maxlength="40" />
                                                            <small>Enter title here.</small>
                                                            <div class="valid-tooltip">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Location</label>
                                                            <input type="text" name="location" value="{{$career->location}}" required class="form-control" placeholder="Add Location" maxlength="40" />
                                                            <small>Enter location here.</small>
                                                            <div class="valid-tooltip">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Category</label>
                                                            <select name="category" class="form-select" id="">
                                                                
                                                                <option value="Part Time" 
                                                                
                                                                @if($career->category == "Part Time")         
                                                                   selected
                                                                @else
                                                                        
                                                                @endif
                                                                >Part Time</option>
                                                                <option value="Full Time"
                                                                
                                                                @if($career->category == "Full Time")         
                                                                   selected
                                                                @else
                                                                        
                                                                @endif
                                                                
                                                                >Full Time</option>
                                                            </select>
                                                            <small>Enter title here.</small>
                                                            <div class="valid-tooltip">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Pay From</label>
                                                            <input type="text" name="payfrom" value="{{$career->payfrom}}" required class="form-control" placeholder="Pay From" maxlength="40" />
                                                            <!-- <small>Enter location here.</small> -->
                                                            <div class="valid-tooltip">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 mb-4">
                                                        <div class="form-group mb-3">
                                                            <label>Pay To</label>
                                                            <input type="text" name="payto" required value="{{$career->payto}}" class="form-control" placeholder="Pay To" maxlength="40" />
                                                            <!-- <small>Enter location here.</small> -->
                                                            <div class="valid-tooltip">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-md-12">                                                        
                                                        <div class="form-group mb-3">
                                                            <label>Description</label>
                                                            <textarea rows="10" cols="50" id="ckeditor-classic" name="description" class="form-control"  placeholder="Description" required>{{$career->description}}</textarea> 
                                                            <small>Description. </small>
                                                        </div>
                                                    </div>  
                                                </div>
                                                <!-- end row -->
                                                <div class="form-group">
                                                    <input  type="submit" name="submit" class="btn btn-primary" value="Update" >
                                                </div>
                                                
                                            </form>
                                @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © 
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
                @endsection()