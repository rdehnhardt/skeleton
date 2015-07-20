function alert(message, title) {
    if (typeof title == 'undefined') {
        swal(message);
    } else {
        swal(message, title);
    }
}
$(document).ready(function () {

    $(this).on('click', 'a', function (e) {
        $(this).blur();
    });

});
document.querySelector('form[data-confirm]').addEventListener('submit', function (e) {
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
            form.submit();
        }
    });
});
//# sourceMappingURL=app.js.map