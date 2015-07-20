function alert(message, title) {
    if (typeof title == 'undefined') {
        swal('System Information', message);
    } else {
        swal(title, message);
    }
}