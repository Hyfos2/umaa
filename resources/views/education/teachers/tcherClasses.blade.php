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
                                    @if(Auth::user()->userTypeId ===5)

                                    <li><a href="{{url('education-dashboard')}}"> My Dashboard</a></li>
                                    @endif
                                    @if(Auth::user()->userTypeId ===1)
                                     <li><a href="{{url('education-dashboard')}}">Home</a></li>
                                    @endif
                                    <li><a href="{{url('teachers')}}">Teachers</a></li>
                                       <li  class="active"><a href="javascript:void(0);">Teacher Profile</a></li>
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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Teacher Classes</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        

                            <ul class=" list-group ">

                                @foreach($subjects  as $item) 


                                  @foreach($item->subject  as $v)


                                <a href="{{url('class-info/'.$id)}}">
                                      <li class="list-group-item">
                                        <h4 class="por-title">{{$v->name}}</h4>
                                      </li>
                                  </a>
                                     @endforeach
                                  @endforeach
                                    </ul>
                                
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>


                    <div class="col-lg-6">
                        <div class="row"> 
                            <div class="col-lg-6 col-xl-12">
                                <div class="card br-0"> 
                                    <div class="card-body">
                                        <div class="chart-container ov-h">
                                            <div id="flotPie1" class="float-chart"></div>
                                        </div>
                                    </div> 
                                </div><!-- /.card -->
                            </div>

                            <!-- <div class="col-lg-6 col-xl-12">
                                <div class="card bg-flat-color-3  ">
                                    <div class="card-body">
                                        <h4 class="card-title m-0  white-color ">August 2018</h4>
                                    </div>
                                     <div class="card-body">
                                         <div id="flotLine5" class="flot-line"></div>
                                     </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.footer')
    </div>

@stop