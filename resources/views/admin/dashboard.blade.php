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

                   <!--  <div class="col-lg-4 col-md-6">
                        <div class="card">
                             <a href="{{url('communication-dashboard')}}">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div> -->
                                   <!--  <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{communicators()}}</span></div>
                                            <div class="stat-heading">Communication</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div> --> 

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
                                        <div id="userDevice"></div>
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
      
        @include('admin.footer')
        <!-- /.site-footer -->
    </div>

@stop
@push('scripts')
<script type="text/javascript">
  var chart;
var legend;
var selected;

   // var types=  "dataLoader": {
   //                    "url": "/user-devices",
   //                    "format": "json",
   //                    "postProcess": function(data, config, chart) {
   //                      console.log("USER DEVICES",data);
   //                      return data.rows;
   //                    }
   //                  }

var types = [{
                  type: "Desktop(Windows)",
                  percent: 85,
                  color: "#ff9e01"
                },{
                  type: "Desktop(Linux)",
                  percent: 20,
                  color: "#b0de09"
            },{
                  type: "Desktop(MacOs)",
                  percent: 5,
                  color: "#b0de09"
            }];

function generateChartData() {
  var chartData = [];
  for (var i = 0; i < types.length; i++) {
    if (i == selected) {
      for (var x = 0; x < types[i].subs.length; x++) {
        chartData.push({
          type: types[i].subs[x].type,
          percent: types[i].subs[x].percent,
          color: types[i].color,
          pulled: true
        });
      }
    } else {
      chartData.push({
        type: types[i].type,
        percent: types[i].percent,
        color: types[i].color,
        id: i
      });
    }
  }
  return chartData;
}

AmCharts.makeChart("userDevice", {
  "type": "pie",
"theme": "light",

  "dataProvider": generateChartData(),
  "labelText": "[[title]]: [[value]]",
  "balloonText": "[[title]]: [[value]]",
  "titleField": "type",
  "valueField": "percent",
  "outlineColor": "#FFFFFF",
  "outlineAlpha": 0.8,
  "outlineThickness": 2,
  "colorField": "color",
  "pulledField": "pulled",
  "titles": [{
    "text": "Visitors Devices"
  }],
  "listeners": [{
    "event": "clickSlice",
    "method": function(event) {
      var chart = event.chart;
      if (event.dataItem.dataContext.id != undefined) {
        selected = event.dataItem.dataContext.id;
      } else {
        selected = undefined;
      }
      chart.dataProvider = generateChartData();
      chart.validateData();
    }
  }],
  "export": {
    "enabled": true
  }
});
</script>
@endpush