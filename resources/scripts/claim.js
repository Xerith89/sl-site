$(document).ready(() => {

    $('.police-section').hide();
    $('.estimates').hide();
    $('.advised').hide();
   

    $('#PoliceAdvised').change(() => {
        if ($('#PoliceAdvised').prop('checked')) {

            $(".police-section").slideDown();
        } else {
            $(".police-section").slideUp();
        }
    });

    $('#Advised').change(() => {
        if ($('#Advised').prop('checked')) {

            $(".advised").slideDown();
        } else {
            $(".advised").slideUp();
        }
    });


    $('#Estimates').change(() => {
        if ($('#Estimates').prop('checked')) {

            $(".estimates").slideDown();
        } else {
            $(".estimates").slideUp();
        }
    });

    $('#submit').click((e) => {
        let result = [];
        $(".errors").empty();
        result = validateClaimForm();
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



function validateClaimForm() {
    let errors = [];

    if ($('#Name').val() === "") {
        errors.push("Your Name Is Required");
    }

    if ($('#PhoneNumber').val() === "" || $('#SecondPhoneNumber').val() === "") {
        errors.push("Both Phone Numbers Are Required");
    }

    //Check phone numbers are valid
    let telRegex = /^(?:(?:\(?(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?(?:\(?0\)?[\s-]?)?)|(?:\(?0))(?:(?:\d{5}\)?[\s-]?\d{4,5})|(?:\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3}))|(?:\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4})|(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}))(?:[\s-]?(?:x|ext\.?|\#)\d{3,4})?$/g
    let mobRegex = /^(07[\d]{8,12}|447[\d]{7,11})$/g;

    if (!telRegex.test($('#PhoneNumber').val()) && $('#PhoneNumber').val() != "") {
        if (!mobRegex.test($('#PhoneNumber').val())) {
            errors.push("Telephone Number is Invalid");
        }
    }

    if (!telRegex.test($('#SecondPhoneNumber').val()) && $('#SecondPhoneNumber').val() != "") {
        if (!mobRegex.test($('#SecondPhoneNumber').val())) {
            errors.push("Alternative Telephone Number is Invalid");
        }
    }

    if ($('#Email').val() == "") {
        errors.push("Email Address Is Required");
    }

    if ($('#confirm-email').val() == "") {
        errors.push("Please Confirm Your Email Address");
    }

    let emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if (!emailRegex.test($('#Email').val()) && $('#Email').val() != "") {

        errors.push("Email Address is Invalid");
    }

    //Make sure email addresses match
    if ($('#Email').val() != $('#confirm-email').val() && $('#Email').val() != "") {
        errors.push("Email Addresses Do Not Match");
    }

    if ($('#SpecificationNumber').val() == "") {
        errors.push("Specification Number Is Required");
    }

    if ($('#RiskAddress').val() == "") {
        errors.push("Risk Address Is Required");
    }

    if ($('#InsuredName').val() == "") {
        errors.push("Name Of Insured Is Required");
    }

    if ($('#DamageCause').val() == "") {
        errors.push("Cause Of Damage Is Required");
    }

    if ($('#Damage').val() == "") {
        errors.push("Damage Is Required");
    }

    if ($('#SettlementPayee').val() == "") {
        errors.push("Settlement Payee Is Required");
    }

    if ($('#ChequeAddress').val() == "") {
        errors.push("Payee Address Is Required");
    }

    return errors;
}