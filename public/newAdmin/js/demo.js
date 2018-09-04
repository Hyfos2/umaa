window.addEventListener('load',function() {
    const loader = document.getElementById('loader');
    setTimeout(function(){
        loader.classList.add('fadeOut');
    }, 300);
});

$('#level').on('change', function () {
    var id = this.value;
    console.log("level",id," is selected");
    $('#subLevel').empty();
    $.get('getSubLevel/' + id, function (response) {
        $('#subLevel').append("<option  selected disabled>Select Sub Level</option>");
        $.each(response, function (key, value) {
            $('#subLevel').append("<option  value=" + value.id + ">" + value.name + "</option>");
        });
    });
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

$('input[type="radio"]').on('click', function()
{
    var val = $(this).val();
    var rowCount = $('#registerTable tr').length;
    var row = $(this).closest("tr");
    var studentId = row.find("#student").val();
    var studentInfo  ={id:studentId, absentism:val};
    var element  =0;
    var students=[];
    // var row = $(this).closest("table").closest("tr");
    students.push(rowCount);
    element++;
    console.log(students);


    //     selectId = $(this).closest('tr').find('select').first();
    // if ($(this).val() === 'absent') {
    //     $("#absenceReason").removeClass("dontShow");
    // }
    // else {
    //     $("#absenceReason").addClass("dontShow");
    // }
});

function submitRegisterInfo() {
    var presentVal =$('#present').val();
    var subjectId =$('#subject').val();
    var studentId =$(' #student').val();
    // var absentval =$('#absent').val();
    var token    = $('input[name="_token"]').val();
    var formData  ={present:presentVal,subject:subjectId,student:studentId};

    console.log(formData);

    $.ajax({
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        // headers: {'X-CSRF-Token': token},
        url: "{!! url('signregister')!!}" ,
        success : function(data)
        {
         console.log(data);
        }
    });

}


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