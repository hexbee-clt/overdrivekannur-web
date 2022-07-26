
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
                                            <li class="breadcrumb-item active"> Quote</li>
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
                                    <th>Process</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                @foreach ($quote as $quotes) 
                                    <tr>
                                        <td>{{ $loop->iteration  }}</td>    
                                        <td>{{$quotes->name}}</td>
                                        <td>{{$quotes->email}}</td>
                                        <td>{{$quotes->number}}</td>
                                        <td><div class="badge badge-soft-success">{{$quotes->actions}}</div></td>
                                        <td>
                                        <?php 
                                                                    $series = str_replace(' ', '-', $quotes->name); 
                                                                    $name = strtolower($series);
                                        ?>  
                                        
                                            <ul class="list" style="list-style:none">
                                                <li><a href="{{url('quote-delete',$quotes->id)}}"><div class="fa fa-trash"></div></a></li>
                                                <li><a href=""  data-bs-toggle="modal" data-bs-target="#{{$name}}"><div class="fas fa-pencil-alt"></div></a>
                                                <div id="{{$name}}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-bs-scroll="true" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Change Process</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <?php $value=$quotes->actions ?>
                                                        <div class="modal-body">
                                                            <label for="">Select Process</label>
                                                           <form action="{{url('quote-save',$quotes->id)}}" method="post">                                                           @csrf
                                                           <select name="action" class="form-select">
                                                                <option value="Active"
                                                                @if( $value == "Active")
                                                                    selected
                                                                
                                                                @endif
                                                                    >Active</option>
                                                                <option value="Processing"
                                                                @if( $value == "Processing")
                                                                    selected
                                                                
                                                                @endif
                                                                    >Processing</option>
                                                                <option value="Rejected"
                                                                @if( $value == "Rejected")
                                                                    selected
                                                                
                                                                @endif
                                                                    >Rejected</option>
                                                                <option value="Completed"
                                                                @if( $value == "Completed")
                                                                    selected
                                                                
                                                                @endif
                                                                    >Completed</option>
                                                        </select>
                                                        <br>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                    </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <!-- <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button> -->
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                                            </li>
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