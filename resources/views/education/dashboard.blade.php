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
                               <!--  <h1>Education Dashboard</h1> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="{{url('admin-dashboard')}}">Go Back</a></li>
                                    <li  class="active"><a href="javascript:void(0);">Education Dashboard</a></li>
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
                    <div class="col-lg-4 col-md-6">
                        <a href="{{url('teachers')}}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                       <!--  <i class="pe-7s-cart"></i> -->
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{secondaryTeachers()}}</span></div>
                                            <div class="stat-heading">Teachers</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="{{url('students')}}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                      <!--   <i class="pe-7s-cart"></i> -->
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{students()}}</span></div>
                                            <div class="stat-heading">Students</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="{{url('subjects')}}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                       <!--  <i class="pe-7s-cart"></i> -->
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{totalSubjects()}}</span></div>
                                            <div class="stat-heading">Subjects</div>
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
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">Performance Per Level (Females vs Males)</div>
                                <div class="card-body">

                                    <div id="performance" style="width: 100%;height: 400px;  margin-top:0px;"></div>


                                </div>
                            </div>
                        </div> 
                         <!-- /.col-lg-8 -->
                         
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
      
        @include('admin.footer')
        <!-- /.site-footer -->
    </div>

@stop
@push('scripts')
<script type="text/javascript">
    var chart = AmCharts.makeChart("performance", {
  "type": "serial",
  "theme": "light",
  "rotate": true,
  "marginBottom": 45,
  "dataProvider": [{
    "age": "6",
    "male": -5.6,
    "female": 5.1
  }, {
    "age": "5",
    "male": -5.1,
    "female": 5.1
  }, {
    "age": "4",
    "male": -3.8,
    "female": 3.8
  }, {
    "age": "3",
    "male": -3.2,
    "female": 3.4
  }, {
    "age": "2",
    "male": -4.4,
    "female": 4.1
  }, {
    "age": "1",
    "male": -5.0,
    "female": 4.8
  }],
  "startDuration": 1,
  "graphs": [{
    "fillAlphas": 0.5,
    "lineAlpha": 0.1,
    "type": "column",
    "valueField": "male",
    "title": "Male",
    "labelText": "[[value]]",
    "clustered": false,
    "labelFunction": function(item) {
      return Math.abs(item.values.value);
    },
    "balloonFunction": function(item) {
      return item.category + ": " + Math.abs(item.values.value) + "%";
    }
  }, {
    "fillAlphas": 0.5,
    "lineAlpha": 0.1,
    "type": "column",
    "valueField": "female",
    "title": "Female",
    "labelText": "[[value]]",
    "clustered": false,
    "labelFunction": function(item) {
      return Math.abs(item.values.value);
    },
    "balloonFunction": function(item) {
      return item.category + ": " + Math.abs(item.values.value) + "%";
    }
  }],
  "categoryField": "age",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0.2,
    "axisAlpha": 0
  },
  "valueAxes": [{
    "gridAlpha": 0,
    "ignoreAxisWidth": true,
    "labelFunction": function(value) {
      return Math.abs(value) + '%';
    },
    "guides": [{
      "value": 0,
      "lineAlpha": 0.2
    }]
  }],
  "balloon": {
    "fixedPosition": true
  },
  "chartCursor": {
    "valueBalloonsEnabled": false,
    "cursorAlpha": 0.05,
    "fullWidth": true
  },
  "allLabels": [{
    "text": "Male",
    "x": "28%",
    "y": "97%",
    "bold": true,
    "align": "middle"
  }, {
    "text": "Female",
    "x": "75%",
    "y": "97%",
    "bold": true,
    "align": "middle"
  }],
 "export": {
    "enabled": true
  }

});
</script>
@endpush