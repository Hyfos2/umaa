{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<title>Wise Owl</title>--}}
    {{--<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>--}}
    {{--<link href="{{asset('newAdmin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />--}}
    {{--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="{{asset('newAdmin/js/morris/morris.css')}}" rel="stylesheet" type="text/css" />--}}
    {{--<link href="{{asset('newAdmin/js/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />--}}
    {{--<link href="{{asset('newAmdin/js//daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />--}}
    {{--<link href="{{asset('newAdmin/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />--}}
    {{--<link href="{{asset('newAdmin/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />--}}
     {{--<link href="{{asset('css/masterCss.css')}}" rel="stylesheet" type="text/css" />--}}
    {{--<!--[if lt IE 9]>--}}
    {{--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>--}}
    {{--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>--}}
    {{--<![endif]-->--}}
{{--</head>--}}
{{--<body class="skin-blue">--}}
{{--@yield('content')--}}

{{--<script src="{{asset('newAdmin/js/jQuery/jQuery-2.1.3.min.js')}}"></script>--}}
{{--<script src="{{asset('newAdmin/js/bootstrap.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('newAdmin/js/fastclick/fastclick.min.js')}}"></script>--}}
{{--<script src="{{asset('newAdmin/js/app.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('newAdmin/js/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('newAdmin/js/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('newAdmin/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('newAdmin/js/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('newAdmin/js/datepicker/bootstrap-datepicker.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('newAdmin/js/iCheck/icheck.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('newAdmin/js/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('newAdmin/js/chartjs/Chart.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('newAdmin/js/demo.js')}}" type="text/javascript"></script>--}}
{{--</body>--}}
{{--</html>--}}

        <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>Wise Owl</title>
    <link href="{{asset('css/display.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/chart.css')}}" rel="stylesheet">
    <link href="{{asset('css/calendar.css')}}" rel="stylesheet">
    <link href="{{asset('css/notification.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet">

</head>

<body class="app">

<div id="loader" class="fadeOut">
    <div class="spinner">
    </div>
</div>

<script type="text/javascript" async="" src="{{asset('analytics.js.download')}}"></script>
@yield('content')
@include('newAdmin.primary.teacherProfile')
<script type="text/javascript" src="{{asset('vendor.js.download')}}"></script>
<script type="text/javascript" src="{{asset('bundle.js.download')}}"></script>
<script type="text/javascript" src="{{asset('jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script  type="text/javascript" src="{{asset('newAdmin/js/demo.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/c3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>--}}
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
<script type="text/javascript" src="{{asset('js/datatables-init.js')}}"></script>
<script type="text/javascript"  async="" src="{{asset('js/last.js')}}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script>


    $(document).ready(function() {
        var gradOneTable;
        var oTableAll;
        gradOneTable = $('#grade-1Table').DataTable({
            "ajax": {
                "url": "{!!url('/getteachers')!!}",
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
                        return '<button  class="btn btn-primary"  data-toggle="modal" data-target="#teacherProfile">View</button>';
                    }
                }
            ]

        }); gradOneTable = $('#userLogsTable').DataTable({
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
                {data: 'name', name: 'user.surname'},
                {data: 'surname', name: 'user.surname'},
                {data: 'lastLogin', name: 'lastLogin'},
                {data: 'lastLogout', name: 'lastLogout'}
            ],
            "aoColumnDefs": [
                {"bSearchable": false, "aTargets": [4]},
                {"bSortable": false, "aTargets": [4]},
                {
                    "aTargets": [5],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        return '<button  class="btn btn-primary"  data-toggle="modal" data-target="#teacherProfile">View</button>';
                    }
                }
            ]

        });
    });
        {{--var gradeTwoTable = $('#grade-2Table').DataTable({--}}
            {{--"autoWidth": false,--}}
            {{--"processing": false,--}}
            {{--"serverSide": false,--}}
            {{--"dom": 'T<"clear">lfrtip',--}}
            {{--"order": [[0, "desc"]],--}}
            {{--"ajax": "{!! url('/getprimaryteachers')!!}",--}}



            {{--"columns": [--}}
                {{--{data: 'user.id', name: 'user.id'},--}}
                {{--{data: 'user.name', name: 'user.surname'},--}}
                {{--{data: 'user.surname', name: 'user.surname'},--}}
                {{--{data: 'user.email', name: 'user.email'},--}}
                {{--{data: 'actions', name: 'actions'}--}}
            {{--],--}}


            {{--"aoColumnDefs": [--}}
                {{--{"bSearchable": false, "aTargets": [4]},--}}
                {{--{"bSortable": false, "aTargets": [4]}--}}
            {{--]--}}

        {{--});--}}
        {{--var gradeThreeTable = $('#grade-3Table').DataTable({--}}
            {{--"autoWidth": false,--}}
            {{--"processing": false,--}}
            {{--"serverSide": false,--}}
            {{--"dom": 'T<"clear">lfrtip',--}}
            {{--"order": [[0, "desc"]],--}}
            {{--"ajax": "{!! url('/getprimaryteachers')!!}",--}}



            {{--"columns": [--}}
                {{--{data: 'user.id', name: 'user.id'},--}}
                {{--{data: 'user.name', name: 'user.surname'},--}}
                {{--{data: 'user.surname', name: 'user.surname'},--}}
                {{--{data: 'user.email', name: 'user.email'},--}}
                {{--{data: 'actions', name: 'actions'}--}}
            {{--],--}}


            {{--"aoColumnDefs": [--}}
                {{--{"bSearchable": false, "aTargets": [4]},--}}
                {{--{"bSortable": false, "aTargets": [4]}--}}
            {{--]--}}

        {{--});--}}
        {{--var gradeFourTable = $('#grade-4Table').DataTable({--}}
            {{--"autoWidth": false,--}}
            {{--"processing": false,--}}
            {{--"serverSide": false,--}}
            {{--"dom": 'T<"clear">lfrtip',--}}
            {{--"order": [[0, "desc"]],--}}
            {{--"ajax": "{!! url('/getprimaryteachers')!!}",--}}



            {{--"columns": [--}}
                {{--{data: 'user.id', name: 'user.id'},--}}
                {{--{data: 'user.name', name: 'user.surname'},--}}
                {{--{data: 'user.surname', name: 'user.surname'},--}}
                {{--{data: 'user.email', name: 'user.email'},--}}
                {{--{data: 'actions', name: 'actions'}--}}
            {{--],--}}


            {{--"aoColumnDefs": [--}}
                {{--{"bSearchable": false, "aTargets": [4]},--}}
                {{--{"bSortable": false, "aTargets": [4]}--}}
            {{--]--}}

        {{--});--}}
        {{--var gradeFiveTable = $('#grade-5Table').DataTable({--}}
            {{--"autoWidth": false,--}}
            {{--"processing": false,--}}
            {{--"serverSide": false,--}}
            {{--"dom": 'T<"clear">lfrtip',--}}
            {{--"order": [[0, "desc"]],--}}
            {{--"ajax": "{!! url('/getprimaryteachers')!!}",--}}

            {{--"columns": [--}}
                {{--{data: 'user.id', name: 'user.id'},--}}
                {{--{data: 'user.name', name: 'user.surname'},--}}
                {{--{data: 'user.surname', name: 'user.surname'},--}}
                {{--{data: 'user.email', name: 'user.email'},--}}
                {{--{data: 'actions', name: 'actions'}--}}
            {{--],--}}
            {{--"aoColumnDefs": [--}}
                {{--{"bSearchable": false, "aTargets": [4]},--}}
                {{--{"bSortable": false, "aTargets": [4]}--}}
            {{--]--}}

        {{--});--}}
        {{--var gradeSixTable = $('#grade-6Table').DataTable({--}}
            {{--"autoWidth": false,--}}
            {{--"processing": false,--}}
            {{--"serverSide": false,--}}
            {{--"dom": 'T<"clear">lfrtip',--}}
            {{--"order": [[0, "desc"]],--}}
            {{--"ajax": "{!! url('/getprimaryteachers')!!}",--}}



            {{--"columns": [--}}
                {{--{data: 'user.id', name: 'user.id'},--}}
                {{--{data: 'user.name', name: 'user.surname'},--}}
                {{--{data: 'user.surname', name: 'user.surname'},--}}
                {{--{data: 'user.email', name: 'user.email'},--}}
                {{--{data: 'actions', name: 'actions'}--}}
            {{--],--}}


            {{--"aoColumnDefs": [--}}
                {{--{"bSearchable": false, "aTargets": [4]},--}}
                {{--{"bSortable": false, "aTargets": [4]}--}}
            {{--]--}}

        {{--});--}}
        {{--var gradeSevenTable = $('#grade-7Table').DataTable({--}}
            {{--"autoWidth": false,--}}
            {{--"processing": false,--}}
            {{--"serverSide": false,--}}
            {{--"dom": 'T<"clear">lfrtip',--}}
            {{--"order": [[0, "desc"]],--}}
            {{--"ajax": "{!! url('/getprimaryteachers')!!}",--}}

            {{--"columns": [--}}
                {{--{data: 'user.id', name: 'user.id'},--}}
                {{--{data: 'user.name', name: 'user.surname'},--}}
                {{--{data: 'user.surname', name: 'user.surname'},--}}
                {{--{data: 'user.email', name: 'user.email'},--}}
                {{--{data: 'actions', name: 'actions'}--}}
            {{--],--}}
            {{--"aoColumnDefs": [--}}
                {{--{"bSearchable": false, "aTargets": [4]},--}}
                {{--{"bSortable": false, "aTargets": [4]}--}}
            {{--]--}}

        {{--});--}}

     {{--});--}}

</script>
<div class="jvectormap-tip"></div>
<div class="jvectormap-tip"></div>
</body>
</html>