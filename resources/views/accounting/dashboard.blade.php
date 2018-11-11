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

                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="{{url('admin-dashboard')}}">Go Back</a></li>
                                    <li  class="active"><a href="javascript:void(0);">Accounting Dashboard</a></li>
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
                                    <li><a href="javascript:void(0);">My Dashboard</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Content -->
        <div class="content">

            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <a href="{{url('activated-student')}}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                      <!--  <i class="pe-7s-cart"></i> -->
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{activated()}}</span></div>
                                            <div class="stat-heading">Activated Students</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <a href="{{url('deactivated-student')}}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                      <!--   <i class="pe-7s-cart"></i> -->
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{deactivated()}}</span></div>
                                            <div class="stat-heading">De-activated Students</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>

    
                </div>
               
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Payment Methods</h4>
                                </div>
                                <div class="card-body--">

                                    
                                        <div id="paymentMethod" style="width : 100%; height: 300px;"></div>

                            
                                   
                                </div>
                            </div> <!-- /.card -->
                        </div> 
                         <!-- /.col-lg-8 -->
                         <div class="col-xl-4 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-xl-12">
                                    <div class="card br-0">
                                         <div class="card-body">
                                    <h4 class="box-title">Revenue and Arrears</h4>
                                </div>
                                        <div class="card-body" style="height: 300px;">
                                        <div id="revNArrears"  style="height: 300px; width: 100%;margin-top: -25px;"></div>
                                        <button class="btn invisible" id="backButton">< Back</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Calender Chart Weather  -->
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="box-title">Chandler</h4> -->
                                <div class="calender-cont widget-calender">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>

            
                </div>
                <!-- /Calender Chart Weather -->
                <!-- Modal - Calendar - Add New Event -->
                <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add New Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#event-modal -->
                <!-- Modal - Calendar - Add Category -->
                <div class="modal fade none-border" id="add-category">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add a category </strong></h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="pink">Pink</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <div id="ecocash" style="display: none">{{$ecocash}}</div>
        <div id="telecash" style="display: none">{{$telecash}}</div>
        <div id="bank" style="display: none">{{$bankTransfer}}</div>
        <div id="cash" style="display: none">{{$cash}}</div>
        <div id="revenue" style="display:none">{{$revenue}}</div>
        <div id="arrears" style="display: none">{{$arrears}}</div>
        <div id="total" style="display: none">{{$total}}</div>
      
        @include('admin.footer')
        <!-- /.site-footer -->
    </div>

@stop
@push('scripts')
<script type="text/javascript">

 

    var ecocash  =document.getElementById('ecocash').innerHTML;
    var telecash  =document.getElementById('telecash').innerHTML;
    var bank  =document.getElementById('bank').innerHTML;
    var cash  =document.getElementById('cash').innerHTML;
    var revenue  =document.getElementById('revenue').innerHTML;
    var arrears  =document.getElementById('arrears').innerHTML;
    var total  =document.getElementById('total').innerHTML;

    var chart = AmCharts.makeChart( "paymentMethod", {
  "type": "serial",
  "theme": "light",
  "dataProvider": [ {
    "country": "Ecocash",
    "visits": ecocash
  }, {
    "country": "Telecash",
    "visits": telecash
  }, {
    "country": "Bank Transfers",
    "visits": bank
  }, {
    "country": "Cash",
    "visits": cash
  }],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }

} );
</script>
<script>

  window.onload = function () {

var totalVisitors = total;
var visitorsData = {
  "Visitor Devices": [{
    click: visitorsChartDrilldownHandler,
    cursor: "pointer",
    explodeOnClick: false,
    innerRadius: "75%",
    legendMarkerType: "square",
    radius: "100%",
    showInLegend: true,
    startAngle: 90,
    type: "doughnut",

    dataPoints: [
      { y: revenue, name: "Total Revenue", color: "#E7823A" },
      { y: arrears, name: "Total Arrears", color: "#546BC1" } ,
    ]
  }],
};

var newVSReturningVisitorsOptions = {
  animationEnabled: true,
  theme: "light2",
  exportEnabled: true,
  // title: {
  //   text: "Visitors Device"
  // },
  subtitles: [{
    //text: "Click on Any Segment to Drilldown",
    backgroundColor: "#2eacd1",
    fontSize: 12,
    fontColor: "white",
    padding: 5
  }],
  legend: {
    fontFamily: "calibri",
    fontSize: 12,
    itemTextFormatter: function (e) {
      return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) + "%";  
    }
  },
  data: []
};

var visitorsDrilldownedChartOptions = {
  animationEnabled: true,
  theme: "light2",
  axisX: {
    labelFontColor: "#717171",
    lineColor: "#a2a2a2",
    tickColor: "#a2a2a2"
  },
  axisY: {
    gridThickness: 0,
    includeZero: false,
    labelFontColor: "#717171",
    lineColor: "#a2a2a2",
    tickColor: "#a2a2a2",
    lineThickness: 1
  },
  data: []
};

var chart = new CanvasJS.Chart("revNArrears", newVSReturningVisitorsOptions);
chart.options.data = visitorsData["Visitor Devices"];
chart.render();

function visitorsChartDrilldownHandler(e) {
  chart = new CanvasJS.Chart("revNArrears", visitorsDrilldownedChartOptions);
  chart.options.data = visitorsData[e.dataPoint.name];
  chart.options.title = { text: e.dataPoint.name }
  chart.render();
  $("#backButton").toggleClass("invisible");
}

// $("#backButton").click(function() { 
//   $(this).toggleClass("invisible");
//   chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
//   chart.options.data = visitorsData["Visitor Devices"];
//   chart.render();
// });

}
</script>
@endpush