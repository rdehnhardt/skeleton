function alert(message, title) {
    if (typeof title == 'undefined') {
        swal('System Information', message);
    } else {
        swal(title, message);
    }
}
$(document).ready(function () {
    $(this).on('click', 'a', function (e) {
        $(this).blur();
    });
});
$(function () {

    Chart.defaults.global.responsive = true;

    build_canvas = function (container) {
        if ($('#chart', container)) {
            $('#chart', container).remove();
        }

        var canvas = $('<canvas id="chart" />');
        canvas.height($(container).data('height'));
        canvas.width($(container).width());
        $(container).html(canvas);
    }

    build_chart = function (start_date, end_date) {
        $.ajax({
            url: '/back/visits/' + start_date + '/' + end_date,
            dataType: 'json',
            success: function (data) {
                build_canvas('#visits');

                new Chart(document.getElementById('chart').getContext('2d')).Line(data, {
                    bezierCurve: true
                });
            }
        });
    }

    cb = function(start, end) {
        $('#reportrange span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
        build_chart(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));
    }

    $('#reportrange').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    $(document).on('click', '#btt-reload', function (e) {
        build_chart($("#start-date").val(), $("#end-date").val());
    });

    cb(moment().subtract(29, 'days'), moment());
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