@extends('admin.master')
@section('content')

<div id="right-panel" class="right-panel">
       @include('admin.header')
       <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            @if(Auth::user()->userTypeId ===1)
                            <div class="page-title">
                                <h1>Education Dashboard</h1>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    @if(Auth::user()->userTypeId  ===5)
                                    <li><a href="{{url('education-dashboard')}}">My Dashboard</a></li>
                                    @endif
                                    @if(Auth::user()->userTypeId  ===1)
                                    <li><a href="{{url('education-dashboard')}}">Go Back</a></li>
                                    @endif
                                    <li  class="active"><a href="javascript:void(0);">Teachers</a></li>
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
                        
                           <input class="btn btn-outline-info"  data-toggle="modal" data-target="#new-teacher" type="button" value="New Teacher">
                           
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
                                            @include('education.teachers.formOne')
                                            @include('education.teachers.formTwo')
                                            @include('education.teachers.formThree')
                                            @include('education.teachers.formFour')
                                            @include('education.teachers.formFive')
                                            @include('education.teachers.formSix')
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
        @include('education.teachers.new')
    </div>

@stop
@push('scripts')
<script type="text/javascript">
    $(document).ready(function()
    {
            $('#level').on('change', function () {
            var id = this.value;
            console.log("level",id," is selected");

            if(id==1)
            {
                 $('#subLevel').removeClass('hidden');
                 $('#subLevel').empty();
                 $.get('getSubLevel/' + id, function (response) {
                $('#subLevel').append("<option  selected disabled>Select Class</option>");
                $.each(response, function (key, value) {
                    $('#subLevel').append("<option  value=" + value.id + ">" + value.name + "</option>");
                });
            });
            }
            else{
                  $('#subLevel').addClass('hidden');

            }
    });

    }); 

jQuery(document).ready(function($) {

        
         $('#form1Teacher').DataTable({
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });


         $('#form2Teacher').DataTable({
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });



         $('#form3Teacher').DataTable({
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });



         $('#form4Teacher').DataTable({
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });


         $('#form5Teacher').DataTable({
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });


         $('#form6Teacher').DataTable({
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });

    });
</script>
@endpush