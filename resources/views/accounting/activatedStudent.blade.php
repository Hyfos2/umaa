@extends('admin.master')
@section('content')


<div id="right-panel" class="right-panel">
       @include('admin.header')

@if(Auth::user()->userTypeId ===1)
       <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                      

                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Accounting Department</h1>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="{{url('accounts-dashboard')}}">Go back</a></li>
                                    <li  class="active"><a href="javascript:void(0);">Activated Students</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
      
        @if(Auth::user()->userTypeId ===5)
       <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                        
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="{{url('accounts-dashboard')}}">Home</a></li>
                                    <li  class="active"><a href="javascript:void(0);">Activated Students</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif


         <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                             <div class="card-header">
                                <strong class="card-title">Students List</strong>
                            </div>
                            <div class="card">
                                <div class="card-body">


                                    <div class="custom-tab">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="custom-nav-form-1-tab" data-toggle="tab" href="#custom-nav-form-1" role="tab" aria-controls="custom-nav-form-1" aria-selected="true">Form-1</a>
                                <a class="nav-item nav-link" id="custom-nav-form-2-tab" data-toggle="tab" href="#custom-nav-form-2" role="tab" aria-controls="custom-nav-form-2" aria-selected="false">Form-2</a>
                                <a class="nav-item nav-link" id="custom-nav-form-3-tab" data-toggle="tab" href="#custom-nav-form-3" role="tab" aria-controls="custom-nav-form-3" aria-selected="false">Form-3</a> 

                                 <a class="nav-item nav-link" id="custom-nav-form-4-tab" data-toggle="tab" href="#custom-nav-form-4" role="tab" aria-controls="custom-nav-form-4" aria-selected="false">Form-4</a> 

                                 <a class="nav-item nav-link" id="custom-nav-form-5-tab" data-toggle="tab" href="#custom-nav-form-5" role="tab" aria-controls="custom-nav-form-5" aria-selected="false">Form-5</a>  

                                 <a class="nav-item nav-link" id="custom-nav-form-6-tab" data-toggle="tab" href="#custom-nav-form-6" role="tab" aria-controls="custom-nav-form-6" aria-selected="false">Form-6</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                            @include('accounting.activated.formOne')
                                            @include('accounting.activated.formTwo')
                                            @include('accounting.activated.formThree')
                                            @include('accounting.activated.formFour')
                                            @include('accounting.activated.formFive')
                                            @include('accounting.activated.formSix')
                                        </div>

                                    </div>


                                   
                                </div>
                            </div> <!-- /.card -->
                        </div> 
                         <!-- /.col-lg-8 -->
                    </div>
                </div>
            
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.footer')
    </div>

@stop
@push('scripts')
<script type="text/javascript">

     jQuery(document).ready(function($) {

        $('#f1').DataTable(
            {
          
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });
        $('#f2').DataTable(
            {
          
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });
        $('#f3').DataTable(
            {
          
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });
        $('#f4').DataTable(
            {
          
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });
        $('#f5').DataTable(
            {
          
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });
        $('#f6').DataTable(
            {
          
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });
            
                    });
    
</script>
@endpush