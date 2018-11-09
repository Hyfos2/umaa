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
    <style>
        #userDevice {
            width       : 100%;
            height      : 360px;
            font-size   : 12px;
        }          
    </style>
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

        $('#userLogs').DataTable(
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
        

         $('#form1Teacher').DataTable({
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });

    });

     


        webix.ready(function(){
          webix.ui({
            container:"listA",
                view:"grouplist",
                scroll:true,
                width:950,
                height:400,
                data:[
    { id: "1", type: "folder", value: "Music", data: [
        { id: "m_0", type: "folder", value: "Jimi Hendrix", data: [
            { id: "m_0_1", type: "file", value: "1967 - Are You Experienced?"},
            { id: "m_0_2", type: "file", value: "1967 - Axis: Bold As Love"},
            { id: "m_0_3", type: "file", value: "1968 - Electric Lady Land"}
        ]},
        { id: "m_1", type: "folder", value: "Georgy Sviridov", data: [
            { id: "m_1_0", type: "file", value: "Petersburg a Vocal Poem"},
            { id: "m_1_1", type: "file", value: "A Russia Flying Away"}
        ]},
        { id: "m_2", type: "folder", value: "God is an Astronaut", data: [
            { id: "m_2_0", type: "file", value: "2005 - All Is Violent, All Is Bright"},
            { id: "m_2_1", type: "file", value: "2007 - Far from Refuge"},
            { id: "m_2_2", type: "file", value: "2010 - Age of the Fifth Sun"}
        ]},
        { id: "m_3", type: "folder", value: "Nikolai Rimsky-Korsakov", data: [
            { id: "m_3_1", type: "file", value: "Scheherazade"}
        ]}
    ]},

    { id:"2", type: "folder", value:"Images", data:[
        { id: "p_0", type: "folder", value: "01 - Christmas", data: [
            { id: "p_0_0", type: "file", value: "IMG_10034" },
            { id: "p_0_1", type: "file", value: "IMG_10035" },
            { id: "p_0_2", type: "file", value: "IMG_10036" },
            { id: "p_0_3", type: "file", value: "IMG_10037" },
            { id: "p_0_4", type: "file", value: "IMG_10038" },
            { id: "p_0_5", type: "file", value: "IMG_10039" },
            { id: "p_0_6", type: "file", value: "IMG_10040" },
            { id: "p_0_7", type: "file", value: "IMG_10041" },
            { id: "p_0_8", type: "file", value: "IMG_10042" }
        ]},
        { id: "p_1", type: "folder", value: "02 - New Year's Eve", data: [
            { id: "p_1_0", type: "file", value: "DSC10384" },
            { id: "p_1_1", type: "file", value: "DSC10385" },
            { id: "p_1_2", type: "file", value: "DSC10386" },
            { id: "p_1_3", type: "file", value: "DSC10387" },
            { id: "p_1_4", type: "file", value: "DSC10388" },
            { id: "p_1_5", type: "file", value: "DSC10389" },
            { id: "p_1_6", type: "file", value: "DSC10390" }
        ]},
        { id: "p_2", type: "folder", value: "03 - Justin's Concert", data: [
            { id: "p_2_0", type: "file", value: "IMG_14021" },
            { id: "p_2_1", type: "file", value: "IMG_14022" },
            { id: "p_2_2", type: "file", value: "IMG_14023" },
            { id: "p_2_3", type: "file", value: "IMG_14024" },
            { id: "p_2_4", type: "file", value: "IMG_14025" },
            { id: "p_2_5", type: "file", value: "IMG_14026" },
            { id: "p_2_6", type: "file", value: "IMG_14027" },
            { id: "p_2_7", type: "file", value: "IMG_14028" },
            { id: "p_2_8", type: "file", value: "IMG_14029" },
            { id: "p_2_9", type: "file", value: "IMG_14030" }
        ]}
    ]},
    { id: "3", type: "folder", value: "Video", data:[
        { id: "v_0", type: "folder", value: "Fitness", data: [
            { id: "v_0_0", type: "file", value: "Step Aerobics Routine" },
            { id: "v_0_1", type: "file", value: "Tae Bo Training" },
            { id: "v_0_2", type: "file", value: "Water Aerobics" }
        ]},
        { id: "v_1", type: "folder", value: "Workouts", data: [
            { id: "v_1_0", type: "file", value: "01 - Pushups" },
            { id: "v_1_1", type: "file", value: "02 - Incline Dumbbell Press" },
            { id: "v_1_2", type: "file", value: "03 - Dips - Chest Version" },
            { id: "v_1_3", type: "file", value: "04 - Dumbbell Bench Press" },
            { id: "v_1_4", type: "file", value: "05 - Incline Cable Flye" }
        ]},
        { id: "v_2", type: "folder", value: "Yoga", data: [
            { id: "v_2_0", type: "file", value: "01 - Bird of Paradise Pose"},
            { id: "v_2_1", type: "file", value: "02 - Boat Pose"},
            { id: "v_2_2", type: "file", value: "03 - Bow Pose"},
            { id: "v_2_3", type: "file", value: "04 - Bridge Pose"}
        ]}
    ]}
]
                });

    });


          jQuery(document).ready(function($) {
            "use strict";
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                  series: [
                  [0, 18000, 35000,  25000,  22000,  0],
                  [0, 33000, 15000,  20000,  15000,  300],
                  [0, 15000, 28000,  15000,  30000,  5000]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
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
