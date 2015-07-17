$(document).ready(function () {

    $(this).on('click', 'a', function (e) {
        $(this).blur();
    });

});
$(document).ready(function () {

    $(this).on('submit', '.delete-record', function (e) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this record!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            swal("Deleted!", "Your record has been deleted.", "success");
        });
    });

});
//# sourceMappingURL=app.js.map