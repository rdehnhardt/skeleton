function alert(message, title) {
    if (typeof title == 'undefined') {
        swal(message);
    } else {
        swal(message, title);
    }
}