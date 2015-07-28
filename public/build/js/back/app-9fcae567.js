
$(document).ready(function () {
    $(this).on('click', 'a', function (e) {
        $(this).blur();
    });
});
$(function () {

    $('#visits').load("/back/visits");

    //
    //$.getJSON('/analytics/visits/2015-07-01/2015-07-28', function (csv) {
    //    $().highcharts({
    //        data: {csv: csv},
    //        title: {text: 'Relatório de visitas'},
    //        subtitle: {text: 'Source: Analytics'},
    //        tooltip: {shared: true},
    //        credits: {enable: false},
    //        yAxis: {allowDecimals: false},
    //        plotOptions: {column: {stacking: 'normal'}}
    //    });
    //});

});

var formConfirm = document.querySelectorAll('form[data-confirm]')

for (var i = 0; i < formConfirm.length; i++) {
    formConfirm[i].addEventListener('submit', function (e) {
        var form = $(this);
        e.preventDefault();

        swal({
            title: "Are you sure?",
            text: form.data('confirm'),
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Yes, I am sure!',
            cancelButtonText: "No, cancel it!",
            closeOnConfirm: false,
            closeOnCancel: true
        }, function (isConfirm) {
            if (isConfirm) {
                swal("Good job!", "You confirmed the action!", "success");
                form.submit();
            }
        });
    });
}


//# sourceMappingURL=app.js.map