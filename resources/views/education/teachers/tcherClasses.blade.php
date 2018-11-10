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
                            <div class="col-lg-12 col-xl-12">
                                <div class="card br-0"> 
                                     <div class="card-header">
                                <strong class="card-title">Attendance</strong>
                            </div>
                                    <div class="card-body" >
                                
                                        
                                        <ul class=" list-group "  style="height:285px;">
                                      <li class="list-group-item" >
                                        <h4 class="por-title">Science</h4>
                                        <hr>

                             <div class="progress-box progress-1">
                                    
                                    <a href="javascript:void(0);"><div class="por-txt">Class Attendance Per week (40%)</div></a>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                            </div>
                            
                                      </li>

                                    </ul>
                                     
                                       

                                  
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="row"> 
                            <div class="col-lg-6 col-xl-12">
                                <div class="card br-0"> 
                                     <div class="card-header">
                                <strong class="card-title">Time Table</strong>
                                
                                <input  style="float:right;" onclick="deleteFxn();" value="PDF" type="button" class="btn btn-outline-info">
                            </div>
                                    <div class="card-body">
                                   
                                            <div class="timetable" style="width:100%; height:100% ;"></div>
                                    
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
          <div id="monday" style="display: none">{{$mondayData}}</div> 
                    <div id="tuesday" style="display: none">{{$tuesdayData}}</div> 
                    <div id="wednesday" style="display: none">{{$wednesdayData}}</div> 
                    <div id="thursday" style="display: none">{{$thursdayData}}</div> 
                    <div id="friday" style="display: none">{{$fridayData}}</div> 
        <div class="clearfix"></div>
        @include('admin.footer')
    </div>

@stop
@push('scripts')
<script type="text/javascript">
      var timetable = new Timetable();

     var mondayData  =JSON.parse(document.getElementById('monday').innerHTML);
     var tuesdayData  =JSON.parse(document.getElementById('tuesday').innerHTML);
     var wednesdayData  =JSON.parse(document.getElementById('wednesday').innerHTML);
     var thursdayData  =JSON.parse(document.getElementById('thursday').innerHTML);
     var fridayData  =JSON.parse(document.getElementById('friday').innerHTML);

     timetable.setScope(8,17)

timetable.addLocations(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']);

mondayData.forEach(function(item){
timetable.addEvent(item.subName+'('+item.levelName+')','Monday',new Date(2016,10,28,item.startTime[0]+item.startTime[1]),new Date(2016,10,28,item.endTime[0]+item.endTime[1]), { url: '#' });

      }); 
      tuesdayData.forEach(function(item){

        timetable.addEvent(item.subName+'('+item.levelName+')', 'Tuesday', new Date(2018,10,28,item.startTime[0]+item.startTime[1]), new Date(2018,10,28,item.endTime[0]+item.endTime[1]), { url: '#' });

      });

       wednesdayData.forEach(function(item){

        timetable.addEvent(item.subName+'('+item.levelName+')', 'Wednesday', new Date(2018,10,28,item.startTime[0]+item.startTime[1]), new Date(2018,10,28,item.endTime[0]+item.endTime[1]), { url: '#' });

      }); 
       thursdayData.forEach(function(item){

        timetable.addEvent(item.subName+'('+item.levelName+')', 'Thursday', new Date(2018,10,28,item.startTime[0]+item.startTime[1]), new Date(2018,10,28,item.endTime[0]+item.endTime[1]), { url: '#' });

      });
       fridayData.forEach(function(item){

        timetable.addEvent(item.subName+'('+item.levelName+')', 'Friday', new Date(2018,10,28,item.startTime[0]+item.startTime[1]), new Date(2018,10,28,item.endTime[0]+item.endTime[1]), { url: '#' });

      });
    
      var renderer = new Timetable.Renderer(timetable);
      renderer.draw('.timetable');
</script>
@endpush