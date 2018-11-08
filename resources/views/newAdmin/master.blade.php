<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @include('title')
    <link href="{{asset('css/display.css')}}" rel="stylesheet">
   <!--  <link href="{{asset('css/chart.css')}}" rel="stylesheet"> -->
    <link href="{{asset('css/calendar.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet">
 <!--    <link href="{{asset('tabnav.css')}}" rel="stylesheet"> -->
    <link href="{{asset('snackbar.css')}}" rel="stylesheet"> 
    <link href="{{asset('time_table/timetablejs.css')}}" rel="stylesheet"> 
    <link href="{{asset('autocomplete/easy-autocomplete.min.css')}}" rel="stylesheet"> 
    <link href="{{asset('time_table/demo.css')}}" rel="stylesheet">
   

<!--   not used css -->
 <!-- <link href="{{asset('notUsedCss.css')}}" rel="stylesheet"> -->
 <!-- end  -->


</head>

<body class="app">
<div id="loader" class="fadeOut">
    <div class="spinner">
    </div>
</div>

<script type="text/javascript" async="" src="{{asset('analytics.js')}}"></script>
@yield('content')
@include('newAdmin.primary.teacherProfile')
@include('newAdmin.users.newAdmin')

<script type="text/javascript" src="{{asset('vendor.js')}}"></script>
<script type="text/javascript" src="{{asset('bundle.js')}}"></script>
<script type="text/javascript" src="{{asset('jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script  type="text/javascript" src="{{asset('newAdmin/js/demo.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/c3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sidebarmenu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sticky-kit.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/buttons.flash.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vfs_fonts.js')}}"></script>
<script type="text/javascript" src="{{asset('js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/buttons.print.min.js')}}"></script>
<script type="text/javascript"   src="{{asset('js/last.js')}}"></script> 
<script type="text/javascript"   src="{{asset('autocomplete/jquery.easy-autocomplete.min.js')}}"></script> 
<script src="{{asset('flatpickr.js')}}"></script>
<script type="text/javascript">
    $(".selectionDate").flatpickr({});
</script>
<script src="{{asset('highcharts/highcharts.js')}}"></script>
<!-- <script src="{{asset('highcharts/exporting.js')}}"></script>
<script src="{{asset('highcharts/export-data.js')}}"></script> -->
<script src="{{asset('time_table/timetable.js')}}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script type="text/javascript">
// $("#full").spectrum({
//     color: "#ECC",
//     showInput: true,
//     className: "full-spectrum",
//     showInitial: true,
//     showPalette: true,
//     showSelectionPalette: true,
//     maxSelectionSize: 10,
//     preferredFormat: "hex",
//     localStorageKey: "spectrum.demo",
//     move: function (color) {
        
//     },
//     show: function () {
    
//     },
//     beforeShow: function () {
    
//     },
//     hide: function () {
    
//     },
//     change: function() {
        
//     },
//     palette: [
//         ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
//         "rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
//         ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
//         "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
//         ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
//         "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
//         "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
//         "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
//         "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
//         "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
//         "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
//         "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
//         "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
//         "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
//     ]
// });

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
        


      // // timetable.addEvent('Zumba', 'Monday', new Date(2015,7,17,12), new Date(2015,7,17,13), { url: '#' });
      // timetable.addEvent('Zumba', 'Tuesday', new Date(2015,7,17,12), new Date(2015,7,17,13), { url: '#' });
      // timetable.addEvent('Zumbu', 'Tuesday', new Date(2015,7,17,13,30), new Date(2015,7,17,14), { url: '#' });
      // timetable.addEvent('Lasergaming', 'Wednesday', new Date(2015,7,17,12,45), new Date(2015,7,17,13,30), { class: 'vip-only', data: { maxPlayers: 14, gameType: 'Capture the flag' } });
      // timetable.addEvent('All-you-can-eat grill', 'Thursday', new Date(2015,7,17,8), new Date(2015,7,18,9), { url: '#' });
      // timetable.addEvent('Hackathon', 'Tokyo', new Date(2015,7,17,11,30), new Date(2015,7,17,20)); // options attribute is not used for this event
      // timetable.addEvent('Tokyo Hackathon Livestream', 'Thursday', new Date(2015,7,17,12,30), new Date(2015,7,17,16,15)); // options attribute is not used for this event
      // timetable.addEvent('Lunch', 'Jakarta', new Date(2015,7,17,9,30), new Date(2015,7,17,11,45), { onClick: function(event) {
      //   window.alert('You clicked on the ' + event.name + ' event in ' + event.location + '. This is an example of a click handler');
      // }});
      // timetable.addEvent('Cocktails', 'Monday', new Date(2015,7,18,11,00), new Date(2015,7,18,12,00), { class: 'vip-only' });

      var renderer = new Timetable.Renderer(timetable);
      renderer.draw('.timetable');
</script>

<script>

    $('grade-3Table tbody').on( 'click', 'button', function () {
        var data = table.row( $(this).parents('tr') ).data();
        alert( data[0] +"'s salary is: "+ data[ 5 ] );
    } );


//    function getActivityInfo(id){
//        $.get('/activityDetail/' + id, function (response) {
//
//           var nameDetail  =document.getElementById('name').innerHTML =response.name;
//           var date  =document.getElementById('date').innerHTML =response.date;
//
//            console.log(response);
//            console.log('name =>',nameDetail);
//        });
//    }

    $(document).ready(function() {

//        $( '#set-permissions' ).on( 'show.bs.modal', function (e) {
//            var target = $(e.relatedTarget).data('target-id');
//
//            console.log(target);
//            //$(e.relatedTarget)
//
//            var tr = $( target ).closest( 'tr' );
//            var tds = tr.find( 'td' );
//            // tds.eq(0).val() -- 1st column
//            var sId = $( '#user_id' ).val( tds.eq(0).val() );
//            // tds.eq(1).val() -- 2nd column and so on.
//            // same goes to others element
//        });


//        $('#table').DataTable();
//        $('#communication').DataTable();
    

        var oTableAll;
        var gradOneTable,gradTwoTable,gradThreeTable,gradFourTable;
        gradOneTable = $('#grade-1Table').DataTable({
            "ajax": {
                "url": "{!!url('/formOneTeachers')!!}",
                "dataSrc": ""
            },
            "autoWidth": false,
            "processing": false,
            "serverSide": false,
            "dom": 'T<"clear">lfrtip',
            "order": [[0, "asc"]],
            "columns": [
                {data: 'user.id', name: 'user.id'},
                {data: 'user.name', name: 'user.surname'},
                {data: 'user.surname', name: 'user.surname'},
                {data: 'user.email', name: 'user.email'}
            ],
            "aoColumnDefs": [
                {"bSearchable": false, "aTargets": [4]},
                {"bSortable": false, "aTargets": [4]},
                {
                    "aTargets": [4],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        return '<button  class="btn btn-primary"  onclick="location.href=\'{!! url('test-aas') !!}\'">View Details</button>';
                    }
                }
            ]
        });
        gradTwoTable = $('#grade-2Table').DataTable({
            "ajax": {
                "url": "{!!url('/formTwoTeachers')!!}",
                "dataSrc": ""
            },
            "autoWidth": false,
            "processing": false,
            "serverSide": false,
            "dom": 'T<"clear">lfrtip',
            "order": [[0, "asc"]],
            "columns": [
                {data: 'user.id', name: 'user.id'},
                {data: 'user.name', name: 'user.surname'},
                {data: 'user.surname', name: 'user.surname'},
                {data: 'user.email', name: 'user.email'}
            ],
            "aoColumnDefs": [
                {"bSearchable": false, "aTargets": [4]},
                {"bSortable": false, "aTargets": [4]},
                {
                    "aTargets": [4],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        return '<button  class="btn btn-primary"  data-toggle="modal"   data-id="'+full[0]+'" >View</button> '+'';
                    }
                }
            ]

        });
        gradThreeTable = $('#grade-3Table').DataTable({
            "ajax": {
                "url": "{!!url('/formThreeTeachers')!!}",
                "dataSrc": ""
            },
            "autoWidth": false,
            "processing": false,
            "serverSide": false,
            "dom": 'T<"clear">lfrtip',
            "order": [[0, "asc"]],
            "columns": [
                {data: 'user.id', name: 'user.id'},
                {data: 'user.name', name: 'user.surname'},
                {data: 'user.surname', name: 'user.surname'},
                {data: 'user.email', name: 'user.email'}
            ],
            "aoColumnDefs": [
                {"bSearchable": false, "aTargets": [4]},
                {"bSortable": false, "aTargets": [4]},
                {
                    "aTargets": [4],
                    "mData": null,
                    "mPath":"http:localhost:8000/teacher-profile",
                    "mRender": function (data, type, full) {
                        return '<button  class="btn btn-primary">View</button>';
                    }
                }
            ]

        });
        gradFourTable = $('#grade-4Table').DataTable({
            "ajax": {
                "url": "{!!url('/formFourTeachers')!!}",
                "dataSrc": ""
            },
            "autoWidth": false,
            "processing": false,
            "serverSide": false,
            "dom": 'T<"clear">lfrtip',
            "order": [[0, "asc"]],
            "columns": [
                {data: 'user.id', name: 'user.id'},
                {data: 'user.name', name: 'user.surname'},
                {data: 'user.surname', name: 'user.surname'},
                {data: 'user.email', name: 'user.email'}
            ],
            "aoColumnDefs": [
                {"bSearchable": false, "aTargets": [4]},
                {"bSortable": false, "aTargets": [4]},
                {
                    "aTargets": [4],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        return '<button  class="btn btn-primary"  data-toggle="modal"   data-id="'+full[0]+'" >View</button> '+'';
                    }
                }
            ]

        });
        //Students
        //UserLogs
        var userLogsTable = $('#userLogsTable').DataTable({
            "ajax": {
                "url": "{!!url('/userLogs')!!}",
                "dataSrc": ""
            },
            "autoWidth": false,
            "processing": false,
            "serverSide": false,
            "dom": 'T<"clear">lfrtip',
            "order": [[0, "asc"]],
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'user.name', name: 'user.surname'},
                {data: 'user.surname', name: 'user.surname'},
                {data: 'logIn', name: 'logIn'},
                {data: 'logOut', name: 'logOut'}
            ],
            "aoColumnDefs": [
                {"bSearchable": false, "aTargets": [4]},
                {"bSortable": false, "aTargets": [4]},
                {
                    "aTargets": [5],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        return '<button  class="btn btn-primary"  data-toggle="modal" > View</button>';
                    }
                }
            ]

        });

        //Admin users' working
        var  adminUsersTable = $('#adminUsersTable').DataTable({
            "ajax": {
                "url": "{!!url('/userAdmins')!!}",
                "dataSrc": ""
            },

            "autoWidth": false,
            "processing": false,
            "serverSide": false,
            "dom": 'T<"clear">lfrtip',
            "order": [[0, "asc"]],
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'user.name', name: 'user.surname'},
                {data: 'user.surname', name: 'user.surname'},
                {data: 'user.email', name: 'user.email'},
                {data: 'user.gender', name: 'user.gender'}
            ],
            "aoColumnDefs": [
                {"bSearchable": false, "aTargets": [4]},
                {"bSortable": false, "aTargets": [4]},
                {
                    "aTargets": [5],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        return "<button  class='btn btn-primary btn-xs'  data-toggle='modal'    onclick=adminUsers("+data.id+")>Set Permissions</button>";
                    }
                }
            ]

        });

        //sports
        var  schoolSportTable = $('#schoolSportTable').DataTable({
            "ajax": {
                "url": "{!!url('/getAllSports')!!}",
                "dataSrc": ""
            },

            "autoWidth": false,
            "processing": false,
            "serverSide": false,
            "dom": 'T<"clear">lfrtip',
            "order": [[0, "asc"]],
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'created_at', name: 'created_at'}
            ],
            "aoColumnDefs": [
                {"bSearchable": false, "aTargets": [4]},
                {"bSortable": false, "aTargets": [4]},
                {
                    "aTargets": [3],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        return '<button  class="btn btn-primary"  onclick="deleteFxn()" >Delete</button>';
                    }
                }
            ]

        });
        //Subjects
        var  cambridgeSubjectsTable = $('#cambridgeSubjectsTable').DataTable({
            "ajax": {
                "url": "{!!url('/getCambridgeSubjects')!!}",
                "dataSrc": ""
            },

            "autoWidth": false,
            "processing": false,
            "serverSide": false,
            "dom": 'T<"clear">lfrtip',
            "order": [[0, "asc"]],
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'subjectCode', name: 'subjectCode'},
                {data: 'name', name: 'name'},
                {data: 'created_at', name: 'created_at'}
            ],
            "aoColumnDefs": [
                {"bSearchable": false, "aTargets": [4]},
                {"bSortable": false, "aTargets": [4]},
                {
                    "aTargets": [4],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        return '<button  class="btn btn-primary"  onclick="deleteFxn()" >Delete</button>';
                    }
                }
            ]

        });
        var  zimsecSubjectsTable = $('#zimsecSubjectsTable').DataTable({
            "ajax": {
                "url": "{!!url('/getZimsecSubjects')!!}",
                "dataSrc": ""
            },

            "autoWidth": false,
            "processing": false,
            "serverSide": false,
            "dom": 'T<"clear">lfrtip',
            "order": [[0, "asc"]],
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'subjectCode', name: 'subjectCode'},
                {data: 'name', name: 'name'},
                {data: 'created_at', name: 'created_at'}
            ],
            "aoColumnDefs": [
                {"bSearchable": false, "aTargets": [4]},
                {"bSortable": false, "aTargets": [4]},
                {
                    "aTargets": [4],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        return '<button  class="btn btn-primary"  onclick="deleteFxn()" >Delete</button>';
                    }
                }
            ]

        });

        var studentForm1Table = $('#form-1studentTable').DataTable({
            "ajax": {
                "url": "{!!url('/formOneStudents')!!}",
                "dataSrc": ""
            },
            "autoWidth": false,
            "processing": false,
            "serverSide": false,
            "dom": 'T<"clear">lfrtip',
            "order": [[0, "asc"]],
            "columns": [
                {data: 'user.id', name: 'user.id'},
                {data: 'user.name', name: 'user.surname'},
                {data: 'user.surname', name: 'user.surname'},
                {data: 'user.email', name: 'user.email'}
            ],
            "aoColumnDefs": [
                {"bSearchable": false, "aTargets": [4]},
                {"bSortable": false, "aTargets": [4]},
                {
                    "aTargets": [4],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        return '<button  class="btn btn-primary"  data-toggle="modal"   data-id="'+full[0]+'" onclick="deleteFxn()">View</button> '+'';
                    }
                }
            ]

        });
        var studentForm2Table = $('#form-2studentTable').DataTable({
            "ajax": {
                "url": "{!!url('/formTwoStudents')!!}",
                "dataSrc": ""
            },
            "autoWidth": false,
            "processing": false,
            "serverSide": false,
            "dom": 'T<"clear">lfrtip',
            "order": [[0, "asc"]],
            "columns": [
                {data: 'user.id', name: 'user.id'},
                {data: 'user.name', name: 'user.surname'},
                {data: 'user.surname', name: 'user.surname'},
                {data: 'user.email', name: 'user.email'}
            ],
            "aoColumnDefs": [
                {"bSearchable": false, "aTargets": [4]},
                {"bSortable": false, "aTargets": [4]},
                {
                    "aTargets": [4],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        return '<button  class="btn btn-primary"  data-toggle="modal"   data-id="'+full[0]+'" onclick="deleteFxn()">View</button> '+'';
                    }
                }
            ]

        });
        var studentForm3Table = $('#form-3studentTable').DataTable({
            "ajax": {
                "url": "{!!url('/formThreeStudents')!!}",
                "dataSrc": ""
            },
            "autoWidth": false,
            "processing": false,
            "serverSide": false,
            "dom": 'T<"clear">lfrtip',
            "order": [[0, "asc"]],
            "columns": [
                {data: 'user.id', name: 'user.id'},
                {data: 'user.name', name: 'user.surname'},
                {data: 'user.surname', name: 'user.surname'},
                {data: 'user.email', name: 'user.email'}
            ],
            "aoColumnDefs": [
                {"bSearchable": false, "aTargets": [4]},
                {"bSortable": false, "aTargets": [4]},
                {
                    "aTargets": [4],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        return '<button  class="btn btn-primary"  data-toggle="modal"   data-id="'+full[0]+'" onclick="deleteFxn()">View</button> '+'';
                    }
                }
            ]

        });
        var    studentForm4Table = $('#form-4studentTable').DataTable({
            "ajax": {
                "url": "{!!url('/formFourStudents')!!}",
                "dataSrc": ""
            },
            "autoWidth": false,
            "processing": false,
            "serverSide": false,
            "dom": 'T<"clear">lfrtip',
            "order": [[0, "asc"]],
            "columns": [
                {data: 'user.id', name: 'user.id'},
                {data: 'user.name', name: 'user.surname'},
                {data: 'user.surname', name: 'user.surname'},
                {data: 'user.email', name: 'user.email'}
            ],
            "aoColumnDefs": [
                {"bSearchable": false, "aTargets": [4]},
                {"bSortable": false, "aTargets": [4]},
                {
                    "aTargets": [4],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        return '<button  class="btn btn-primary"  data-toggle="modal"   data-id="'+full[0]+'" onclick="deleteFxn()">View</button> '+'';
                    }
                }
            ]

        });
    });
    $(document).ready(function() {

        Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Browser market shares in January, 2018'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
                    }
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Chrome',
                    y: 61.41,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Internet Explorer',
                    y: 8
                }, {
                    name: 'Firefox',
                    y: 10.85
                }, {
                    name: 'Edge',
                    y: 4.67
                }, {
                    name: 'Safari',
                    y: 4.18
                }, {
                    name: 'Sogou Explorer',
                    y: 1.64
                }, {
                    name: 'Opera',
                    y: 1.6
                }, {
                    name: 'QQ',
                    y: 1.2
                }, {
                    name: 'Other',
                    y: 2.61
                }]
            }]
        });
    });



</script>
{{--<script>--}}
    {{--var debit=document.getElementById('debit').innerText;--}}
    {{--var credit=document.getElementById('credit').innerText;--}}
    {{--console.log(debit);--}}
    {{--console.log(credit);--}}
    {{--var ctx = document.getElementById("myChart");--}}
    {{--var myChart = new Chart(ctx, {--}}
        {{--type: 'bar',--}}
        {{--data: {--}}
            {{--labels: ["Fees paid", "Arrears"],--}}
            {{--datasets: [{--}}
                {{--label: '# of Students',--}}
                {{--data: [credit, debit],--}}
                {{--backgroundColor: [--}}
                    {{--'rgba(255, 99, 132, 0.2)',--}}
                    {{--'rgba(54, 162, 235, 0.2)',--}}
                    {{--'rgba(255, 206, 86, 0.2)',--}}
                    {{--'rgba(75, 192, 192, 0.2)',--}}
                    {{--'rgba(153, 102, 255, 0.2)',--}}
                    {{--'rgba(255, 159, 64, 0.2)'--}}
                {{--],--}}
                {{--borderColor: [--}}
                    {{--'rgba(255,99,132,1)',--}}
                    {{--'rgba(54, 162, 235, 1)',--}}
                    {{--'rgba(255, 206, 86, 1)',--}}
                    {{--'rgba(75, 192, 192, 1)',--}}
                    {{--'rgba(153, 102, 255, 1)',--}}
                    {{--'rgba(255, 159, 64, 1)'--}}
                {{--],--}}
                {{--borderWidth: 1--}}
            {{--}]--}}
        {{--},--}}
        {{--options: {--}}
            {{--scales: {--}}
                {{--yAxes: [{--}}
                    {{--ticks: {--}}
                        {{--beginAtZero:true--}}
                    {{--}--}}
                {{--}]--}}
            {{--}--}}
        {{--}--}}
    {{--});--}}
{{--</script>--}}
<div id="comingSoon">
    coming soon.!!
</div>
</body>
</html>