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
                                    <li><a href="{{url('students')}}">Students</a></li>
                                    <li><a href="{{url('student-class')}}">Student Profile</a></li>
                                       <li  class="active"><a href="javascript:void(0);">Performance Details</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



         <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                           <!--  <div class="card-header">
                                <strong class="card-title">Student Subjects</strong>
                            </div> -->
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">


    
                                        

 <ul class=" list-group-item ">


 <div class="your-class">
    <div>your content</div>
    <div>your content</div>
    <div>your content</div>
  </div>
  
    
     
   </ul>
                                
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.footer')
    </div>

@stop