$(function () {
    "use strict";
    var chart = c3.generate({
        bindto: '#visitor',
        data: {
            columns: [
                ['Other', 30],
                ['Desktop', 10],
                ['Tablet', 40],
                ['Mobile', 50]
            ],

            type : 'donut',
            onclick: function (d, i) { console.log("onclick", d, i); },
            onmouseover: function (d, i) { console.log("onmouseover", d, i); },
            onmouseout: function (d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            title: "Our visitor",
            width:20

        },

        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
        color: {
            pattern: ['#eceff1', '#745af2', '#26c6da', '#1e88e5']
        }
    });

});

$( function() {
    $( "#tabs" ).tabs();
} );

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


(function() {
    var a = document.getElementById("notificationMessage");
    a.className = "show";
    setTimeout(function(){ a.className = a.className.replace("show", ""); }, 2000);
})();
