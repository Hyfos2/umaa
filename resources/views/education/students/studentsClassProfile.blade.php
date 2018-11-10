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
                                <h1> Education Dashboard</h1>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="{{url('education-dashboard')}}">Home</a></li>
                                    <li><a href="{{url('students')}}">Students</a></li>
                                       <li  class="active"><a href="javascript:void(0);">Student Profile</a></li>
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
                                <strong class="card-title">Student Subjects</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        

                            <ul class=" list-group ">
                                      <li class="list-group-item">
                                        <h4 class="por-title">Maths</h4>
                                        <hr>

                             <div class="progress-box progress-1">
                                    
                                    <a href="{{url('std-subject-perf')}}"><div class="por-txt">Daily Exercises (90%)</div></a>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                            </div>
                            <hr>
                            <div class="progress-box progress-1">
                                    
                                    <a href="{{url('std-subject-perf')}}"><div class="por-txt">End of Term (40%)</div></a>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                            </div>

                                      </li>
                                
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
                                    <div class="card-header">
                                        <strong>Attendance Per Week</strong>
                                    </div>
                                    <div class="card-body">
                                       
                                            <div id="carousel"></div>
                                     
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
@push('scripts')
<script type="text/javascript">
    
webix.ui({
  view:"window",
  body:{
    view:"carousel",
    id:"carousel",
    width:464, height:275, 
    cols:[
      { css: "image", template:img, data:{src:"http://docs.webix.com/samples/26_carousel/imgs/image001.jpg"} },
      { css: "image", template:img, data:{src:"http://docs.webix.com/samples/26_carousel/imgs/image002.jpg"} },
      { css: "image", template:img, data:{src:"http://docs.webix.com/samples/26_carousel/imgs/image003.jpg"} },
      { css: "image", template:img, data:{src:"http://docs.webix.com/samples/26_carousel/imgs/image004.jpg"} },
      { css: "image", template:img, data:{src:"http://docs.webix.com/samples/26_carousel/imgs/image005.jpg"} },
      { css: "image", template:img, data:{src:"http://docs.webix.com/samples/26_carousel/imgs/image006.jpg"} }
    ]
  },
  head:{
    view:"toolbar", type:"MainBar", elements:[
      {view:"label", label: "Photobook", align:'left'}
    ]
  },
  top:70,
  left:70
}).show();

function img(obj){
  return '<img src="'+obj.src+'" class="content" ondragstart="return false"/>'
}

</script>
@endpush