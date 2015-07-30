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
                    bezierCurve: false
                });
            }
        });
    }



    $(document).on('click', '#btt-reload', function(e) {
        build_chart($("#start-date").val(), $("#end-date").val());
    });

    $('#btt-reload').trigger('click');

});