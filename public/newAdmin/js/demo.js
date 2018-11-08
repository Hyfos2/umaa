// window.addEventListener('load',function() {
//     const loader = document.getElementById('loader');
//     setTimeout(function(){
//         loader.classList.add('fadeOut');
//     }, 300);
// });


$('#level').on('change', function () {
    var id = this.value;
    console.log("level",id," is selected");
    $('#subLevel').empty();
    $.get('getSubLevel/' + id, function (response) {
        $('#subLevel').append("<option  selected disabled>Select Class</option>");
        $.each(response, function (key, value) {
            $('#subLevel').append("<option  value=" + value.id + ">" + value.name + "</option>");
        });
    });
});


$('#timetableLevel').on('change', function () {
    var id = this.value;
    console.log("level",id," is selected");
    $('#timetableSubLevel').empty();
    $.get('getSubLevel/' + id, function (response) {
        $('#timetableSubLevel').append("<option  selected disabled>Select Class</option>");
        $.each(response, function (key, value) {
            $('#timetableSubLevel').append("<option  value=" + value.id + ">" + value.name + "</option>");
        });
    });


var options = {
    url: "/getLevelSubjects/"+id,
    getValue: "name",

    list: {
        match: {
            enabled: true
        }
    }
};

$("#timeTableSubjectId").easyAutocomplete(options);

var teachers = {
    url: "/getTeacherSubjects/"+id,
    getValue: "name",
    // template: {
    //     type: "custom",
    //     method: function(value, item) {
    //         return value;
    //     }
    // }

    list: {
        match: {
            enabled: true
        }
    }
};

$("#timeTableTeacher").easyAutocomplete(teachers);

});


$('#availability').on('change', function () {
    var selected = this.value;
    if(selected ==="absent")
    {
        $('absenceReason').removeClass('dontShow');
        console.log("iam absent and i have been selected");
    }
    else{
        $('absenceReason').addClass('dontShow');
    }

});

$('input#mark').keypress(function() {


    var val = $(this).val();
    console.log();
    $('#formcont').fadeIn('slow');
    $('#next').hide('slow');
    $(this).focus();
});

//.is(':checked')) { alert("it's checked");

(function (window) {

    // var tableRows = $('#registerTable tr').length;
    //
    // var i;
    // for(i =0;i<tableRows;i++)
    // {
    //    var element = document.getElementById("registerTable").rows[i];
    //     var element =$('#registerTable tr td:nth-child(2)');
    //     console.log(element);
    // }

    var count  =1;

    $('input[type="checkbox"]').on('click', function() {
        var checkedValue   =$(this).prop('checked');
        var absenteeismValue =$(this).attr("value");

        $(this).closest('tr').find('input[type="checkbox"]').each(function(){
            $(this).prop('checked',false);
        });

        $(this).prop("checked",checkedValue);
        var row = $(this).closest("tr");
        var studentId = row.find("#student").val();
        var subjectId = row.find("#subject").val();

        console.log( "student id=>",studentId  ," subject id=>" ,subjectId  ," absenteeism=>" ,absenteeismValue);
        var studentsRegister =[];
        studentsRegister.push([studentId,subjectId,absenteeismValue]);


           console.log("Students register =>",studentsRegister);
           console.log("array elements =>",studentsRegister.length);
           console.log("number of times the box was checked=>",count++);

    });



    // $(".message :checkbox").change(function(){
    //     var col = $(this).attr("value");
    //
    //     console.log(col);
    //     $(".message :checkbox[value='" + col + "']:checked").not(this).each(function(){
    //         $(this).prop('checked',false);
    //     });
    //
    // });

    // $('input[type="radio"]').on('click', function()
    // {
    //     var thisId = $(this).attr('id');
    //     if(thisId ==="present")
    //     {
    //         $('input[type="radio"]').not("[id='"+thisId+"']").prop('unchecked',true)
    //
    //     }
    //     console.log(thisId);
    //     $(this).parents('tr').find('.message').not("[id='"+thisId+"']").attr('checked',false);
    //     console.log($(this).parents('tr').find('.message').not("[id ='"+thisId+"']"))
    // })


    // Element.setAttribute(name, value);

})(window);


$('#individualRecord').on('click',function () {
    event.preventDefault();
    var row = $(this).closest("tr");
    var studentId = row.find("#student").val();
    var subjectId = row.find("#subjectId").val();
    var mark = row.find("#mark").val();
    var comment = row.find("#comment").val();
    var x = document.getElementById("dailyExercises");
    x.className = "show";
    // var request_time = new Date().getTime() - start_time;
    setTimeout(function(){ x.className = x.className.replace("show", ""); },3000);
    location.reload();
    console.log("student id  ",studentId  ,"subject id",subjectId ,"mark =>",mark ,"comment=>",comment);
});

$('#allRecords').on('click',function (event) {
    event.preventDefault();
    var table = document.getElementById("exercises");
    var token    =document.getElementById('dailyExercises').firstElementChild;

    console.log(token);
    
    var Rows = $("#exercises tbody tr");
    var studentRecords   =[];
    Rows.each(function(index, element) {

        var studentId = $(this).find('td').eq(2).find("#student").val();
        var subjectId = $(this).find('td').eq(2).find("#subjectId").val();
        var mark = $(this).find('td').eq(2).find("#mark").val();
        var comment = $(this).find('td').eq(2).find("#comment").val();
        studentRecords.push([studentId,subjectId,mark,comment]);

    });

    var x = document.getElementById("dailyExercises");
    x.className = "show";
    // var request_time = new Date().getTime() - start_time;
    setTimeout(function(){ x.className = x.className.replace("show", ""); },3000);
    location.reload();
    // $.ajax({
    //     type    :"POST",
    //     contentType: false,
    //     processData: false,
    //     headers : { 'X-CSRF-Token': token },
    //     url     :'recordExercise',
    //     success : function(data,status) {
    //         if(status !=="success")
    //         {
    //             console.log('there was an error');
    //         }
    //         // var request_time = new Date().getTime() - start_time;
    //         // setTimeout(function(){ x.className = x.className.replace("show", ""); },request_time);
    //         location.reload();
    //     }
    // });

    console.log("student records",studentRecords);

    // for (var i = 0, row; row = table.rows[i],i<tableRows; i++) {
    //     var x = row.cells[i].childNodes[i].value;
    //     console.log(x);
    // }

    // var row = $(this).closest("tr");
    // var studentId = row.find("#student").val();
    // var subjectId = row.find("#subjectId").val();
    // var mark = row.find("#mark").val();
    // var comment = row.find("#comment").val();

    // console.log("student id  ",studentId  ,"subject id",subjectId ,"mark =>",mark ,"comment=>",comment);
});

// (function (window) {
//
//
//
//
//
//
//
//
//         // var rowCount = $('#exercises tr').length;
//         //
//         //
//         // console.log(row);
//         // var subject = row.find("#subjectId").val();
//         // var studentId = row.find("#student").val();
//         // var mark = row.find("#mark").val();
//         // var comment = row.find("#comment").val();
//         //
//         // console.log("mark",mark,"comment",comment,"studnetId",studentId,"subject",subject);
//
//
//
// })(window);

function submitRegisterInfo() {


   // console.log("Students register =>",studentRegister);

    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); },3000);
    location.reload();

    // var token    =document.getElementById('classRegister').firstElementChild.value;
    //
    // $.ajax({
    //     type    :"POST",
    //     contentType: false,
    //     processData: false,
    //     headers : { 'X-CSRF-Token': token },
    //     url     :'signregister',
    //     success : function(data)
    //     {
    //         console.log(data);
    //     }
    // });

}
function submitDailyRecords()
{
    var rowCount = $('#registerTable tr').length;
    var row = $(this).closest("tr");
    var studentId = row.find("#student").val();
    var subjectId = row.find("#subject").val();

}


// $('input[type="radio"]').on('click', function()
// {
//
//
//     var val = $(this).val();
//     var rowCount = $('#registerTable tr').length;
//     var row = $(this).closest("tr");
//     var studentId = row.find("#student").val();
//     var studentInfo  ={id:studentId, absentism:};
//     var element  =0;
//     var students=[];
//     // var row = $(this).closest("table").closest("tr");
//     students.push(rowCount);
//     element++;
    //console.log(students);

//
//     //     selectId = $(this).closest('tr').find('select').first();
//     // if ($(this).val() === 'absent') {
//     //     $("#absenceReason").removeClass("dontShow");
//     // }
//     // else {
//     //     $("#absenceReason").addClass("dontShow");
//     // }
// });




// (function() {
//     var a = document.getElementById("notificationMessage");
//     a.className = "show";
//     setTimeout(function(){ a.className = a.className.replace("show", ""); }, 2000);
// })();
//
// function  groupByForm() {
//
//     alert('sdsd');
// }



// var btnContainer = document.getElementsByClassName("sidebar-menu");
// var btns = btnContainer.getElementsByClassName("treeview");
//
// for (var i = 0; i < btns.length; i++) {
//     btns[i].addEventListener("click", function() {
//         var current = document.getElementsByClassName("active");
//         current[0].className = current[0].className.replace(" active", "");
//         this.className += "active";
//     });
// }




(function(window) {
//alert('am being called');
    // var a = document.getElementById("message");
    // a.className = "show";
    // setTimeout(function(){ a.className = a.className.replace("show", ""); }, 2000);


    var notify = document.getElementById("notificationMessage");
    notify.className = "show";
    setTimeout(function(){ notify.className = notify.className.replace("show", ""); }, 2000);
})(window);

function deleteFxn(){
    var notify = document.getElementById("comingSoon");
    notify.className = "show";
    setTimeout(function(){ notify.className = notify.className.replace("show", ""); }, 2000);
}


function adminUsers(id){
    alert(id);
}

function  deleteEvent($id) {
     var token    =document.getElementById('eventForm').firstElementChild.value;
     var start_time = new Date().getTime();
     var x = document.getElementById("snackbar");
       x.className = "show";
       $.ajax({
        type    :"POST",
        contentType: false,
        processData: false,
        headers : { 'X-CSRF-Token': token },
        url     :'deleteEvent/'+$id,
        success : function(data,status) {
            if(status !=="success")
            {
                console.log('there was an error');
            }
            var request_time = new Date().getTime() - start_time;
            setTimeout(function(){ x.className = x.className.replace("show", ""); },request_time);
            location.reload();

        }
    });
}