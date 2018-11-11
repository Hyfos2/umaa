<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('title')
    <meta name="description" content="Umaa Institute">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--   <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png"> -->
  
    <link rel="stylesheet" href="{{asset('admin/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
    <link href="{{asset('datatables/jquery.dataTables.min.css')}}" rel="stylesheet" />
      <link href="{{asset('admin/css/datepicker.css')}}" rel="stylesheet" />
   <!--  <link href="{{asset('niceCharts/export.css')}}" rel="stylesheet" type="text/css" media="all" /> -->
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" media="all" />
  <script src="{{asset('filemanager/webix.js')}}" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('filemanager/webix.css')}}">
  <link href="{{asset('time_table/timetablejs.css')}}" rel="stylesheet"> 
  <link href="{{asset('time_table/demo.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('admin/css/additionalCss.css')}}">
</head>
<body>
  @include('admin.aside')
  @yield('content')
<script src="{{asset('admin/js/minified.js')}}"></script> 
<script src="{{asset('admin/js/moment.min.js')}}"></script>
<script src="{{asset('admin/js/fullcalendar.min.js')}}"></script>
<script src="{{asset('admin/js/init/fullcalendar-init.js')}}"></script>
<script src="{{asset('datatables/jquery-3.3.1.js')}}"></script>
<script src="{{asset('datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/js/axios.min.js')}}"></script>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="{{asset('flatpickr.js')}}"></script>
<script src="{{asset('time_table/timetable.js')}}"></script>
<script src="{{asset('charts/canvasjs.min.js')}}"></script>
@stack('scripts')

<script type="text/javascript">

    function deleteFxn(){
    var notify = document.getElementById("snackbar");
    notify.className = "show";
    setTimeout(function(){ notify.className = notify.className.replace("show", ""); }, 2000);
        }


         jQuery(document).ready(function($) {

        $(".selectionDate").flatpickr({});

        $('#example').DataTable(
            {
          
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });


        $('#admins').DataTable(
            {
          
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });

        $('#communicators').DataTable(
            {
          
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });

        $('#educator').DataTable(
            {
          
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });
        $('#accountant').DataTable(
            {
          
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });
    });

     



          jQuery(document).ready(function($) {
            "use strict";
            
            });

</script> 
<script>
var chartData = generateChartData();
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "light",
    "marginRight": 80,
    "autoMarginOffset": 20,
    "marginTop": 7,
    "dataProvider": chartData,
    "valueAxes": [{
        "axisAlpha": 0.2,
        "dashLength": 1,
        "position": "left"
    }],
    "mouseWheelZoomEnabled": true,
    "graphs": [{
        "id": "g1",
        "balloonText": "[[value]]",
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "hideBulletsCount": 50,
        "title": "red line",
        "valueField": "visits",
        "useLineColorForBulletBorder": true,
        "balloon":{
            "drop":true
        }
    }],
    "chartScrollbar": {
        "autoGridCount": true,
        "graph": "g1",
        "scrollbarHeight": 40
    },
    "chartCursor": {
       "limitToGraph":"g1"
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "axisColor": "#DADADA",
        "dashLength": 1,
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true
    }
});

chart.addListener("rendered", zoomChart);
zoomChart();

// this method is called when chart is first inited as we listen for "rendered" event
function zoomChart() {
    // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
    chart.zoomToIndexes(chartData.length - 40, chartData.length - 1);
}


// generate some random data, quite different range

// generate some random data, quite different range
function generateChartData() {
    var chartData = [];
    var firstDate = new Date();
    firstDate.setDate(firstDate.getDate() - 5);
    var visits = 1200;
    for (var i = 0; i < 1000; i++) {
        // we create date objects here. In your data, you can have date strings
        // and then set format of your dates using chart.dataDateFormat property,
        // however when possible, use date objects, as this will speed up chart rendering.
        var newDate = new Date(firstDate);
        newDate.setDate(newDate.getDate() + i);
        
        visits += Math.round((Math.random()<0.5?1:-1)*Math.random()*10);

        chartData.push({
            date: newDate,
            visits: visits
        });
    }
    return chartData;
}
</script>


</body>
</html>
