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