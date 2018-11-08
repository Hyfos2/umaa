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
                                    <li><a href="{{url('communication-dashboard')}}">Dashboard</a></li>
                                    <li  class="active"><a href="javascript:void(0);">Messages</a></li>
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
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">


                                    <div class="custom-tab">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="custom-nav-inbox-tab" data-toggle="tab" href="#custom-nav-inbox" role="tab" aria-controls="custom-nav-inbox" aria-selected="true">Inbox</a>

                                <a class="nav-item nav-link" id="custom-nav-read-tab" data-toggle="tab" href="#custom-nav-read" role="tab" aria-controls="custom-nav-read" aria-selected="false">Read</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                            @include('communication.inbox')
                                            @include('communication.read')
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
    </div>

@stop