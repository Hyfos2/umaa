


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




