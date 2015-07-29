$(function () {

    function buildGraph(startDate, endDate) {
        $('#visits').width($("#visits").parent('div').width());
        $('#visits').height('400px');

        $.ajax({
            url: '/back/visits/' + startDate + '/' + endDate,
            dataType: 'json',
            success: function (data) {
                var visits = document.getElementById('visits');

                new Chart(visits.getContext('2d')).Line(data);
            }
        });
    }

    buildGraph('2015-07-29', '2015-07-29');

});