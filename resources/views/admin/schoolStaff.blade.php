@extends('admin.master')
@section('content')

<div id="right-panel" class="right-panel">
       @include('admin.header')
       <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="{{url('admin-dashboard')}}">Dashboard</a></li>
                                    <li  class="active"><a href="javascript:void(0);">Staff</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                
                <div class="clearfix"></div>

                <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-12" style="padding:3px;">
                        
                           <input class="btn btn-outline-info"  data-toggle="modal" data-target="#new-member" type="button" value="New Member">
                        
                        
                    </div>
                </div>
            </div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">


                                    <div class="custom-tab">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="custom-nav-admin-tab" data-toggle="tab" href="#custom-nav-admin" role="tab" aria-controls="custom-nav-admin" aria-selected="true">Administrators</a> 

                                <a class="nav-item nav-link" id="custom-nav-accountant-tab" data-toggle="tab" href="#custom-nav-accountant" role="tab" aria-controls="custom-nav-accountant" aria-selected="false">Accountants</a>

                                <a class="nav-item nav-link" id="custom-nav-education-tab" data-toggle="tab" href="#custom-nav-education" role="tab" aria-controls="custom-nav-education" aria-selected="false">Education Managers</a>

                                <a class="nav-item nav-link" id="custom-nav-communicator-tab" data-toggle="tab" href="#custom-nav-communicator" role="tab" aria-controls="custom-nav-communicator" aria-selected="false">Communicator</a>
                
                                            </div>
                                        </nav>
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                             @include('admin.staff.admin')
                                             @include('admin.staff.accountant')
                                             @include('admin.staff.education')
                                             @include('admin.staff.communicator')



                                             
                                             



                                           
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>
            
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.footer')
        @include('admin.newStaff')
    </div>

@stop