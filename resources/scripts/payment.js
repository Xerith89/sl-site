$(document).ready(() => {

    $('#submit').click((e) => {
        let result = [];
        $(".errors").empty();
        result = validatePayments();
        if (result.length) {
            e.preventDefault();
            result.forEach((element) => {
                $(".errors").append('<div class="alert alert-danger" role="alert">' + element + '</div>');
            });
            window.focus();
            window.scrollTo(0, 400);
        }
    });


});

function validatePayments() {

    let errors = [];

    //Make sure name is filled in
    if ($('#Name').val() === "") {
        errors.push("Please Provide Your Name");
    }
    //Check phone numbers are valid
    let telRegex = /^(?:(?:\(?(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?(?:\(?0\)?[\s-]?)?)|(?:\(?0))(?:(?:\d{5}\)?[\s-]?\d{4,5})|(?:\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3}))|(?:\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4})|(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}))(?:[\s-]?(?:x|ext\.?|\#)\d{3,4})?$/g
    let mobRegex = /^(07[\d]{8,12}|447[\d]{7,11})$/g;
    if (!telRegex.test($('#PhoneNumber').val()) && $('#PhoneNumber').val() != "") {
        if (!mobRegex.test($('#PhoneNumber').val())) {
            errors.push("PhoneNumber Number is Invalid");
        }
    }

    if ($('#PhoneNumber').val() === "") {
        errors.push("Telephone Number Is Required");
    }

    //Check valid email
    let emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if (!emailRegex.test($('#EmailAddress').val()) && $('#EmailAddress').val() !== "") {

        errors.push("Email Address is Invalid");
    }

    //Check emails are not empty
    if ($('#EmailAddress').val() === "") {
        errors.push("Email Address Is Required");
    }
    if ($('#ConfirmEmail').val() === "") {
        errors.push("Confirm Email Is Required");
    }

    //Make sure email addresses match
    if ($('#EmailAddress').val() != $('#ConfirmEmail').val() && $('#EmailAddress').val() != "") {
        errors.push("Email Addresses Do Not Match");
    }

    if ($('#SpecificationNumber').val() === "") {
        errors.push("Specification Number Is Required");
    }

    if ($('#RiskPostCode').val() === "") {
        errors.push("Post Code Is Required");
    }

    if ($('#StartDate').val() == "") {
        errors.push("Cover Start Date Is Required");
    }

    return errors;
}
