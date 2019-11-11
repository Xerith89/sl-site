$(document).ready(() => {

    $('#start-date').on('click', () => {
        $('#start-date').datepicker({
            dateFormat: 'dd-M-yy',
            minDate: 0,
            changeYear: true
        });
        $('#start-date').datepicker("show");
    });


    let rebuild;
    let premium;
    //Replace rebuild input string with comma separated version
    $('#rebuild').on('input', () => {
        rebuild = parseInt($('#rebuild').val());
        if (isNaN(rebuild)) {
            $('#rebuild').val("");
        }
        rebuild = numberWithCommas(rebuild);
    });
    $('#rebuild').on('blur', () => {
        $('#rebuild').val(rebuild);
        if ($('#rebuild').val() == "NaN") {
            $('#rebuild').val("");
        }
    });

    //Replace common area with comma separated version
    $('#premium').on('input', () => {
        premium = parseInt($('#premium').val());
        if (isNaN(premium)) {
            $('#premium').val("");
        }
        premium = numberWithCommas(premium);
    });
    $('#premium').on('blur', () => {
        $('#premium').val(premium);
        if ($('#premium').val() == "NaN") {
            $('#premium').val("");
        }
    });
});

