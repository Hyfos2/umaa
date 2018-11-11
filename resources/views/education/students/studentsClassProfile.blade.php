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
                              @foreach($subjects  as $item)
                                      <li class="list-group-item">
                                        <h4 class="por-title">{{$item->subject->name}}</h4>
                                        <hr>

                             <div class="progress-box progress-1">
                                    <!-- href="{{url('std-subject-perf')}}" -->
                                    <a ><div class="por-txt">Daily Exercises (90%)</div></a>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                            </div>
                            <hr>
                            <div class="progress-box progress-1">
                                 <!--    href="{{url('std-subject-perf')}}" -->
                                    <a ><div class="por-txt">End of Term (40%)</div></a>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                            </div>

                                      </li>
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
                                    <div class="card-header">
                                        <strong>Attendance Per Week</strong>
                                    </div>
                                    <div class="card-body">

                                      <div id="absentiesm" style="width   :100%;
                                                              height    : 350px;
                                                              font-size : 11px;">
    
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
@push('scripts')
<script type="text/javascript">
var chart = AmCharts.makeChart("absentiesm", {
    "type": "serial",
    "theme": "light",
    "marginRight": 40,
    "marginLeft": 40,
    "autoMarginOffset": 20,
    "mouseWheelZoomEnabled":true,
    "dataDateFormat": "YYYY-MM-DD",
    "valueAxes": [{
        "id": "v1",
        "axisAlpha": 0,
        "position": "left",
        "ignoreAxisWidth":true
    }],
    "balloon": {
        "borderThickness": 1,
        "shadowAlpha": 0
    },
    "graphs": [{
        "id": "g1",
        "balloon":{
          "drop":true,
          "adjustBorderColor":false,
          "color":"#ffffff"
        },
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "bulletSize": 5,
        "hideBulletsCount": 50,
        "lineThickness": 2,
        "useLineColorForBulletBorder": true,
        "valueField": "value" 
    }],
    "chartScrollbar": {
        "graph": "g1",
        "oppositeAxis":false,
        "offset":30,
        "scrollbarHeight": 80,
        "backgroundAlpha": 0,
        "selectedBackgroundAlpha": 0.1,
        "selectedBackgroundColor": "#888888",
        "graphFillAlpha": 0,
        // "graphLineAlpha": 0.5,
        "selectedGraphFillAlpha": 0,
        "selectedGraphLineAlpha": 1,
        "autoGridCount":true,
        "color":"#AAAAAA"
    },
    "chartCursor": {
        "pan": true,
        "valueLineEnabled": true,
        "valueLineBalloonEnabled": true,
        "cursorAlpha":1,
        "cursorColor":"red",
        "limitToGraph":"g1",
        "valueZoomable":true
    },
    "valueScrollbar":{
      "oppositeAxis":false,
      "offset":50,
      "scrollbarHeight":10
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
       // "dashLength": 1,
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true
    },
    "dataProvider": [{
        "date": "2018-10-27",
        "value": 2
    }, {
        "date": "2018-10-28",
        "value": 1
    }, {
        "date": "2018-10-29",
        "value": 1
    }, {
        "date": "2018-10-30",
        "value": 1
    }, {
        "date": "2018-10-31",
        "value": 1
    }, {
        "date": "2018-11-01",
        "value": 2
    }, {
        "date": "2018-11-02",
        "value": 1
    }, {
        "date": "2018-11-03",
        "value": 2
    }, {
        "date": "2018-11-04",
        "value": 2
    }, {
        "date": "2018-11-05",
        "value": 1
    }, {
        "date": "2018-11-06",
        "value": 1
    }, {
        "date": "2018-11-07",
        "value": 1
    }, {
        "date": "2018-11-08",
        "value": 2
    }, {
        "date": "2018-11-09",
        "value": 1
    }, {
        "date": "2018-11-10",
        "value": 2
    }]
});

chart.addListener("rendered", zoomChart);

zoomChart();

function zoomChart() {
    chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
}
  
</script>
@endpush