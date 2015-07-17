$(document).ready(function () {

    $(this).on('click', 'a', function (e) {
        $(this).blur();
    });

});
$(document).ready(function () {

    $(this).on('submit', '.delete-record', function (e) {
        if (!confirm('This operation will remove this record.\n\nContinue?')) {
            e.preventDefault();
        }
    });

});
//# sourceMappingURL=app.js.map