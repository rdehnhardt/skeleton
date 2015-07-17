$(document).ready(function () {

    $(this).on('submit', '.delete-record', function (e) {
        if (!confirm('This operation will remove this record.\n\nContinue?')) {
            e.preventDefault();
        }
    });

});
//# sourceMappingURL=app.js.map