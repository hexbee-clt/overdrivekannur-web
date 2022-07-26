
@extends('layout.admin-layout')
@section('content')
<div class="main-content">

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18"> Contact</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active"> Contacts</li>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                @foreach ($contacts as $contact) 
                                    <tr>
                                        <td>{{ $loop->iteration  }}</td>    
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->number}}</td>
                                        <td>
                                            <ul class="list" style="list-style:none">
                                                <li><a href="{{url('contact-delete',$contact->id)}}"><div class="fa fa-trash"></div></a></li>
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