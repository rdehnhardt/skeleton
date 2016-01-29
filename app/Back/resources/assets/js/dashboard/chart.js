$(function () {

    if ($('.dashboard').length) {
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
                url: '/back/dashboard/visits/' + start_date + '/' + end_date,
                dataType: 'json',
                success: function (data) {
                    build_canvas('#visits');

                    new Chart(document.getElementById('chart').getContext('2d')).Line(data, {
                        bezierCurve: true
                    });
                }
            });
        }

        cb = function (start, end) {
            $('#reportrange span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));

            $('#chart')
            {
                build_chart(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));
            }
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
            $('#chart')
            {
                build_chart($("#start-date").val(), $("#end-date").val());
            }
        });

        $(document).resize(cb(moment(), moment()));

        cb(moment(), moment());
    }
});