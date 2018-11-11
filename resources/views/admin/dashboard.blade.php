@extends('admin.master')
@section('content')
<div id="right-panel" class="right-panel">
       @include('admin.header')
       <!-- @include('newAdmin.alertMessages') -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <a href="{{url('accounts-dashboard')}}">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                   <!--  <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div> -->
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{accountants()}}</span></div>
                                            <div class="stat-heading">Accounting</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>

                 
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                             <a href="{{url('education-dashboard')}}">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <!-- <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div> -->
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{educationManagers()}}</span></div>
                                            <div class="stat-heading">Education</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">

                        <div class="col-xl-6">
                            <div class="card">
                               
                                <div class="card-body" style="height: 360px;">

                                    <div class="list-group-items">

                                     <div class="calender-cont widget-calender">
                                    <div id="calendar"></div>

                                </div>
                            </div>
                                </div>
                            </div>
                        </div> 

                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-xl-12">
                                    <div class="card br-0">
                                        <div class="card-body" style="height: 360px;">
                                        <div id="chartContainer"  style="height: 300px; width: 100%;"></div>
                                        <button class="btn invisible" id="backButton">< Back</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            
                <!-- Modal - Calendar - Add New Event -->
                <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Add New Event</h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-info save-event waves-effect waves-light">Create event</button>
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
        <div id="chrome" style="display: none">{{$windowsChromeUser}}</div>
        <div id="edge" style="display: none">{{$windowsEdgeUser}}</div>
        <div id="others" style="display: none">{{$others}}</div>
        <div id="total" style="display: none">{{$total}}</div>
        
      
        @include('admin.footer')
        <!-- /.site-footer -->
    </div>

@stop
@push('scripts')
<script type="text/javascript">

  var chrome  =document.getElementById("chrome").innerHTML;
  var others  =document.getElementById("others").innerHTML;
  var edge  =document.getElementById("edge").innerHTML;
  var total  =document.getElementById("total").innerHTML;

  window.onload = function () {

var totalVisitors = total;
var visitorsData = {
  "Visitor Devices": [{
    click: visitorsChartDrilldownHandler,
    cursor: "pointer",
    explodeOnClick: false,
    innerRadius: "75%",
    legendMarkerType: "square",
    name: "Visitor Devices",
    radius: "100%",
    showInLegend: true,
    startAngle: 90,
    type: "doughnut",
    dataPoints: [
      { y: chrome, name: "Chrome Browser Visitors", color: "#E7823A" },
      { y: edge, name: "Edge  Browser Visitors", color: "#546BC1" } ,
      { y: others, name: "Other  Browsers Visitors", color: "#78AB46" }
    ]
  }],
  "Chrome Browser Visitors": [{
    color: "#E7823A",
    name: "New Visitors",
    type: "column",
    dataPoints: [
      { x: new Date("1 Jan 2015"), y: 33000 },
      { x: new Date("1 Feb 2015"), y: 35960 },
      { x: new Date("1 Mar 2015"), y: 42160 },
      { x: new Date("1 Apr 2015"), y: 42240 },
      { x: new Date("1 May 2015"), y: 43200 },
      { x: new Date("1 Jun 2015"), y: 40600 },
      { x: new Date("1 Jul 2015"), y: 42560 },
      { x: new Date("1 Aug 2015"), y: 44280 },
      { x: new Date("1 Sep 2015"), y: 44800 },
      { x: new Date("1 Oct 2015"), y: 48720 },
      { x: new Date("1 Nov 2015"), y: 50840 },
      { x: new Date("1 Dec 2015"), y: 51600 }
    ]
  }],
  "Returning Visitors": [{
    color: "#546BC1",
    name: "Returning Visitors",
    type: "column",
    dataPoints: [
      { x: new Date("1 Jan 2015"), y: 22000 },
      { x: new Date("1 Feb 2015"), y: 26040 },
      { x: new Date("1 Mar 2015"), y: 25840 },
      { x: new Date("1 Apr 2015"), y: 23760 },
      { x: new Date("1 May 2015"), y: 28800 },
      { x: new Date("1 Jun 2015"), y: 29400 },
      { x: new Date("1 Jul 2015"), y: 33440 },
      { x: new Date("1 Aug 2015"), y: 37720 },
      { x: new Date("1 Sep 2015"), y: 35200 },
      { x: new Date("1 Oct 2015"), y: 35280 },
      { x: new Date("1 Nov 2015"), y: 31160 },
      { x: new Date("1 Dec 2015"), y: 34400 }
    ]
  }]
};

var newVSReturningVisitorsOptions = {
  animationEnabled: true,
  theme: "light2",
  title: {
    text: "Visitors Device"
  },
    exportEnabled: true,
  subtitles: [{
    //text: "Click on Any Segment to Drilldown",
    backgroundColor: "#2eacd1",
    fontSize: 16,
    fontColor: "white",
    padding: 5
  }],
  legend: {
    fontFamily: "calibri",
    fontSize: 14,
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

var chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
chart.options.data = visitorsData["Visitor Devices"];
chart.render();

function visitorsChartDrilldownHandler(e) {
  chart = new CanvasJS.Chart("chartContainer", visitorsDrilldownedChartOptions);
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