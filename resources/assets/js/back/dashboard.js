$(function () {

    function buildGraph(startDate, endDate) {
        $('#visits').width($("#visits").parent('div').width());
        $('#visits').height('400px');

        $.ajax({
            url: '/back/visits/' + startDate + '/' + endDate,
            dataType: 'json',
            success: function (data) {
                new Chart(document.getElementById('visits').getContext('2d')).Line(data);
            }
        });
    }

    $(document).on('click', '#btt-reload', function() {
        buildGraph($('#start-date').val(), $('#end-date').val());
    });

    $('#btt-reload').trigger('click');

});