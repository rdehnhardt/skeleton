type = ['', 'info', 'success', 'warning', 'danger'];


demo = {
        initVectorMap: function () {
            var mapData = {
                "AU": 760,
                "BR": 550,
                "CA": 120,
                "DE": 1300,
                "FR": 540,
                "GB": 690,
                "GE": 200,
                "IN": 200,
                "RO": 600,
                "RU": 300,
                "US": 2920,
            };

            $('#worldMap').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                zoomOnScroll: false,
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#AAAAAA", "#444444"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        },

        initAnimationsArea: function () {
            $('.animationsArea .btn').click(function () {
                animation_class = $(this).data('animation-class');

                $parent = $(this).closest('.animationsArea');

                $parent.find('.btn').removeClass('btn-fill');

                $(this).addClass('btn-fill');

                $parent.find('.animated')
                    .removeAttr('class')
                    .addClass('animated')
                    .addClass(animation_class);

                $parent.siblings('.header').find('.title small').html('class: <code>animated ' + animation_class + '</code>');
            });
        },

        showSwal: function (type) {
            if (type == 'basic') {
                swal("Here's a message!");

            } else if (type == 'title-and-text') {
                swal("Here's a message!", "It's pretty, isn't it?")

            } else if (type == 'success-message') {
                swal("Good job!", "You clicked the button!", "success")

            } else if (type == 'warning-message-and-confirmation') {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn btn-info btn-fill",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonClass: "btn btn-danger btn-fill",
                    closeOnConfirm: false,
                }, function () {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });

            } else if (type == 'warning-message-and-cancel') {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel plx!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                }, function (isConfirm) {
                    if (isConfirm) {
                        swal("Deleted!", "Your imaginary file has been deleted.", "success");
                    } else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });

            } else if (type == 'custom-html') {
                swal({
                    title: 'HTML example',
                    html: 'You can use <b>bold text</b>, ' +
                    '<a href="http://github.com">links</a> ' +
                    'and other HTML tags'
                });

            } else if (type == 'auto-close') {
                swal({
                    title: "Auto close alert!",
                    text: "I will close in 2 seconds.",
                    timer: 2000,
                    showConfirmButton: false
                });
            } else if (type == 'input-field') {
                swal({
                        title: 'Input something',
                        html: '<p><input id="input-field" class="form-control">',
                        showCancelButton: true,
                        closeOnConfirm: false,
                        allowOutsideClick: false
                    },
                    function () {
                        swal({
                            html: 'You entered: <strong>' +
                            $('#input-field').val() +
                            '</strong>'
                        });
                    })
            }
        },

        initFormExtendedSliders: function () {

            // Sliders for demo purpose in refine cards section
            if ($('#slider-range').length != 0) {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 500,
                    values: [75, 300],
                });
            }
            if ($('#refine-price-range').length != 0) {
                $("#refine-price-range").slider({
                    range: true,
                    min: 0,
                    max: 999,
                    values: [100, 850],
                    slide: function (event, ui) {
                        min_price = ui.values[0];
                        max_price = ui.values[1];
                        $(this).siblings('.price-left').html('&euro; ' + min_price);
                        $(this).siblings('.price-right').html('&euro; ' + max_price)
                    }
                });
            }

            if ($('#slider-default').length != 0 || $('#slider-default2').length != 0) {
                $("#slider-default, #slider-default2").slider({
                    value: 70,
                    orientation: "horizontal",
                    range: "min",
                    animate: true
                });
            }
        },

        initFormExtendedDatetimepickers: function () {
            $('.datetimepicker').datetimepicker({
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                }
            });

            $('.datepicker').datetimepicker({
                format: 'MM/DD/YYYY',
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                }
            });

            $('.timepicker').datetimepicker({
    //          format: 'H:mm',    // use this format if you want the 24hours timepicker
                format: 'h:mm A',    //use this format if you want the 12hours timpiecker with AM/PM toggle
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                }
            });
        },
}
