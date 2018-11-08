<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @include('title')
    <link href="{{asset('css/display.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/chart.css')}}" rel="stylesheet">
    <link href="{{asset('css/calendar.css')}}" rel="stylesheet">
    <link href="{{asset('css/notification.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('snackbar.css')}}" rel="stylesheet">

</head>

<body class="app">

<div id="loader" class="fadeOut">
    <div class="spinner">
    </div>
</div>

<script type="text/javascript" async="" src="{{asset('analytics.js.download')}}"></script>
@yield('content')
@include('newAdmin.primary.teacherProfile')
@include('newAdmin.users.newAdmin')
<script type="text/javascript" src="{{asset('vendor.js.download')}}"></script>
<script type="text/javascript" src="{{asset('bundle.js.download')}}"></script>
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
<script type="text/javascript" src="{{asset('js/datatables-init.js')}}"></script>
<script type="text/javascript"  async="" src="{{asset('js/last.js')}}"></script>
<script type="text/javascript"  src="{{asset('js/adminCalenderFramework.js')}}"></script>
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
                        return '<button  class="btn btn-primary"  data-toggle="modal"   data-id="'+full[0]+'" data-target="#teacherProfile">View</button> '+'';
                    }
                }
            ]

        });
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
                        return '<button  class="btn btn-primary"  data-toggle="modal" data-target="#teacherProfile"> View</button>';
                    }
                }
            ]

        });
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
                        return '<button  class="btn btn-primary"  data-toggle="modal" data-target="#teacherProfile"> View</button>';
                    }
                }
            ]

        });
    });

</script>
<div class="jvectormap-tip"></div>
<div class="jvectormap-tip"></div>
</body>
</html>