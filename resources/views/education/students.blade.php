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
                                    <li><a href="{{url('education-dashboard')}}">Dashboard</a></li>
                                    <li  class="active"><a href="javascript:void(0);">Students</a></li>
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
                        
                           <input class="btn btn-outline-info" type="button"  data-toggle="modal" data-target="#new-student"  value="New Student">
                           <!--  <input class="btn btn-outline-info" type="button" value="Activate">
                            <input class="btn btn-outline-info" type="button" value="De-activate"> -->
                        
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
                                <a class="nav-item nav-link active" id="custom-nav-form-1-tab" data-toggle="tab" href="#custom-nav-form-1" role="tab" aria-controls="custom-nav-form-1" aria-selected="true">Form 1</a> 

                                <a class="nav-item nav-link" id="custom-nav-form-2-tab" data-toggle="tab" href="#custom-nav-form-2" role="tab" aria-controls="custom-nav-form-2" aria-selected="false">Form 2</a>

                                <a class="nav-item nav-link" id="custom-nav-form-3-tab" data-toggle="tab" href="#custom-nav-form-3" role="tab" aria-controls="custom-nav-form-3" aria-selected="false">Form 3</a>

                                <a class="nav-item nav-link" id="custom-nav-form-4-tab" data-toggle="tab" href="#custom-nav-form-4" role="tab" aria-controls="custom-nav-form-4" aria-selected="false">Form 4</a>

                                <a class="nav-item nav-link" id="custom-nav-form-5-tab" data-toggle="tab" href="#custom-nav-form-5" role="tab" aria-controls="custom-nav-form-5" aria-selected="false">Form 5</a>

                                <a class="nav-item nav-link" id="custom-nav-form-6-tab" data-toggle="tab" href="#custom-nav-form-6" role="tab" aria-controls="custom-nav-form-6" aria-selected="false">Form 6</a>
                
                                            </div>
                                        </nav>
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                            @include('education.students.formOne')
                                            @include('education.students.formTwo')
                                            @include('education.students.formThree')
                                            @include('education.students.formFour')
                                            @include('education.students.formFive')
                                            @include('education.students.formSix')
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
        @include('education.students.new')
    </div>

@stop
