
@extends('layout.admin-layout')
@section('content')
<div class="main-content">

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18"> career</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active"> careers</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
         
                            <thead class="thead-dark">
                                <tr>
                                    <th>Sl#</th>
                                    <th>Title</th>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>File</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                @foreach ($inquiry as $inquiry) 
                                    <tr>
                                        <td>{{ $loop->iteration  }}</td>    
                                        <td>{{$inquiry->title}}</td>
                                        <td>{{$inquiry->name}}</td>
                                        <td>{{$inquiry->number}}</td>
                                        <td><a href="{{$inquiry->path}}{{$inquiry->file}}" tagreg="blank">d</a></td>
                                        <td>
                                            <ul class="list">
                                            <li><a href="{{url('career-edit',$inquiry->id)}}"><i class="fas fa-pencil-alt"></i></a></li>
                                                <li><a href="{{url('career-delete',$inquiry->id)}}"><i class="fa fa-trash"></i></a></li>
                                            </ul>
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                                       
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