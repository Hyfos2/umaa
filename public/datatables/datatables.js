
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
                    return '<button  class="btn btn-primary"  data-toggle="modal" data-target="#teacherProfile"> View</button>';
                }
            }
        ]

    });
});


// {{--var gradeTwoTable = $('#grade-2Table').DataTable({--}}
//     {{--"autoWidth": false,--}}
//     {{--"processing": false,--}}
//     {{--"serverSide": false,--}}
//     {{--"dom": 'T<"clear">lfrtip',--}}
//     {{--"order": [[0, "desc"]],--}}
//     {{--"ajax": "{!! url('/getprimaryteachers')!!}",--}}
//
//
//
//     {{--"columns": [--}}
//     {{--{data: 'user.id', name: 'user.id'},--}}
//     {{--{data: 'user.name', name: 'user.surname'},--}}
//     {{--{data: 'user.surname', name: 'user.surname'},--}}
//     {{--{data: 'user.email', name: 'user.email'},--}}
//     {{--{data: 'actions', name: 'actions'}--}}
//     {{--],--}}
//
//
//     {{--"aoColumnDefs": [--}}
//     {{--{"bSearchable": false, "aTargets": [4]},--}}
//     {{--{"bSortable": false, "aTargets": [4]}--}}
//     {{--]--}}
//
//     {{--});--}}
// {{--var gradeThreeTable = $('#grade-3Table').DataTable({--}}
//     {{--"autoWidth": false,--}}
//     {{--"processing": false,--}}
//     {{--"serverSide": false,--}}
//     {{--"dom": 'T<"clear">lfrtip',--}}
//     {{--"order": [[0, "desc"]],--}}
//     {{--"ajax": "{!! url('/getprimaryteachers')!!}",--}}
//
//
//
//     {{--"columns": [--}}
//     {{--{data: 'user.id', name: 'user.id'},--}}
//     {{--{data: 'user.name', name: 'user.surname'},--}}
//     {{--{data: 'user.surname', name: 'user.surname'},--}}
//     {{--{data: 'user.email', name: 'user.email'},--}}
//     {{--{data: 'actions', name: 'actions'}--}}
//     {{--],--}}
//
//
//     {{--"aoColumnDefs": [--}}
//     {{--{"bSearchable": false, "aTargets": [4]},--}}
//     {{--{"bSortable": false, "aTargets": [4]}--}}
//     {{--]--}}
//
//     {{--});--}}
// {{--var gradeFourTable = $('#grade-4Table').DataTable({--}}
//     {{--"autoWidth": false,--}}
//     {{--"processing": false,--}}
//     {{--"serverSide": false,--}}
//     {{--"dom": 'T<"clear">lfrtip',--}}
//     {{--"order": [[0, "desc"]],--}}
//     {{--"ajax": "{!! url('/getprimaryteachers')!!}",--}}
//
//
//
//     {{--"columns": [--}}
//     {{--{data: 'user.id', name: 'user.id'},--}}
//     {{--{data: 'user.name', name: 'user.surname'},--}}
//     {{--{data: 'user.surname', name: 'user.surname'},--}}
//     {{--{data: 'user.email', name: 'user.email'},--}}
//     {{--{data: 'actions', name: 'actions'}--}}
//     {{--],--}}
//
//
//     {{--"aoColumnDefs": [--}}
//     {{--{"bSearchable": false, "aTargets": [4]},--}}
//     {{--{"bSortable": false, "aTargets": [4]}--}}
//     {{--]--}}
//
//     {{--});--}}
// {{--var gradeFiveTable = $('#grade-5Table').DataTable({--}}
//     {{--"autoWidth": false,--}}
//     {{--"processing": false,--}}
//     {{--"serverSide": false,--}}
//     {{--"dom": 'T<"clear">lfrtip',--}}
//     {{--"order": [[0, "desc"]],--}}
//     {{--"ajax": "{!! url('/getprimaryteachers')!!}",--}}
//
//     {{--"columns": [--}}
//     {{--{data: 'user.id', name: 'user.id'},--}}
//     {{--{data: 'user.name', name: 'user.surname'},--}}
//     {{--{data: 'user.surname', name: 'user.surname'},--}}
//     {{--{data: 'user.email', name: 'user.email'},--}}
//     {{--{data: 'actions', name: 'actions'}--}}
//     {{--],--}}
//     {{--"aoColumnDefs": [--}}
//     {{--{"bSearchable": false, "aTargets": [4]},--}}
//     {{--{"bSortable": false, "aTargets": [4]}--}}
//     {{--]--}}
//
//     {{--});--}}
// {{--var gradeSixTable = $('#grade-6Table').DataTable({--}}
//     {{--"autoWidth": false,--}}
//     {{--"processing": false,--}}
//     {{--"serverSide": false,--}}
//     {{--"dom": 'T<"clear">lfrtip',--}}
//     {{--"order": [[0, "desc"]],--}}
//     {{--"ajax": "{!! url('/getprimaryteachers')!!}",--}}
//
//
//
//     {{--"columns": [--}}
//     {{--{data: 'user.id', name: 'user.id'},--}}
//     {{--{data: 'user.name', name: 'user.surname'},--}}
//     {{--{data: 'user.surname', name: 'user.surname'},--}}
//     {{--{data: 'user.email', name: 'user.email'},--}}
//     {{--{data: 'actions', name: 'actions'}--}}
//     {{--],--}}
//
//
//     {{--"aoColumnDefs": [--}}
//     {{--{"bSearchable": false, "aTargets": [4]},--}}
//     {{--{"bSortable": false, "aTargets": [4]}--}}
//     {{--]--}}
//
//     {{--});--}}
// {{--var gradeSevenTable = $('#grade-7Table').DataTable({--}}
//     {{--"autoWidth": false,--}}
//     {{--"processing": false,--}}
//     {{--"serverSide": false,--}}
//     {{--"dom": 'T<"clear">lfrtip',--}}
//     {{--"order": [[0, "desc"]],--}}
//     {{--"ajax": "{!! url('/getprimaryteachers')!!}",--}}
//
//     {{--"columns": [--}}
//     {{--{data: 'user.id', name: 'user.id'},--}}
//     {{--{data: 'user.name', name: 'user.surname'},--}}
//     {{--{data: 'user.surname', name: 'user.surname'},--}}
//     {{--{data: 'user.email', name: 'user.email'},--}}
//     {{--{data: 'actions', name: 'actions'}--}}
//     {{--],--}}
//     {{--"aoColumnDefs": [--}}
//     {{--{"bSearchable": false, "aTargets": [4]},--}}
//     {{--{"bSortable": false, "aTargets": [4]}--}}
//     {{--]--}}
//
//     {{--});--}}
//
// {{--});--}}
