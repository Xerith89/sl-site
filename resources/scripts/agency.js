$(document).ready(() => {
    $('.applicant-one').slideUp();
    $('.applicant-two').slideUp();
    $('.fca-ref').slideUp();
    $('.principal').slideUp();
    $('.terminated-info').slideUp();
    $('.convictions-info').slideUp();

    $('#submit-app').click((e) => {
        let result = [];
        $(".errors").empty();
        result = validateApplication();
        if (result.length) {
            e.preventDefault();
            result.forEach((element) => {
                $(".errors").append('<div class="alert alert-danger" role="alert">' + element + '</div>');
            });
            window.focus();
            window.scrollTo(0, 400);
        }
    });

    $('#BusinessType').change(() => {
        if ($('#BusinessType').val() == "Sole") {
            $('.applicant-one').slideDown();
            $('.applicant-two').slideUp();
        } else if ($('#BusinessType').val() == "Partnership") {
            $('.applicant-one').slideDown();
            $('.applicant-two').slideDown();
        } else {
            $('.applicant-one').slideUp();
            $('.applicant-two').slideUp();
        }
    });


    $('#FCAAuth').change(() => {
        if ($('#FCAAuth').val() == "FCA") {
            $('.fca-ref').slideDown();
            $('.principal').slideUp();
        } else if ($('#FCAAuth').val() == "AppointedRep") {
            $('.principal').slideDown();
            $('.fca-ref').slideUp();
        } else {
            $('.fca-ref').slideUp();
            $('.principal').slideUp();
        }
    });

    $('#CriminalConvictions').change(() => {
        if ($('#CriminalConvictions').val() == "Yes") {
            $('.convictions-info').slideDown();
        } else {
            $('.convictions-info').slideUp();
        }
    });

    $('#AgencyTerminated').change(() => {
        if ($('#AgencyTerminated').val() == "Yes") {
            $('.terminated-info').slideDown();
        } else {
            $('.terminated-info').slideUp();
        }
    });

    $('#EstablishedDate').on('click', () => {
        $('#EstablishedDate').datepicker({
            dateFormat: 'dd-M-yy',
            
            changeYear: true
        });
        $('#EstablishedDate').datepicker("show");
    });

    $('#FinancialYearEnd').on('click', () => {
        $('#FinancialYearEnd').datepicker({
            dateFormat: 'dd-M-yy',
            
            changeYear: true
        });
        $('#FinancialYearEnd').datepicker("show");
    });

    $('#IndemRenewalDate').on('click', () => {
        $('#IndemRenewalDate').datepicker({
            dateFormat: 'dd-M-yy',
            changeYear: true
        });
        $('#IndemRenewalDate').datepicker("show");
    });

    let limit;
    let excess;
    $('#IndemLimit').on('input', () => {
        limit = parseInt($('#IndemLimit').val());
        if (isNaN(limit)) {
            $('#IndemLimit').val("");
        }
        limit = numberWithCommas(limit);
    });
    $('#IndemLimit').on('blur', () => {
        $('#IndemLimit').val(limit);
        if ($('#IndemLimit').val() == "NaN") {
            $('#IndemLimit').val("");
        }
    });

    $('#IndemExcess').on('input', () => {
        excess = parseInt($('#IndemExcess').val());
        if (isNaN(excess)) {
            $('#IndemExcess').val("");
        }
        excess = numberWithCommas(excess);
    });
    $('#IndemExcess').on('blur', () => {
        $('#IndemExcess').val(excess);
        if ($('#IndemExcess').val() == "NaN") {
            $('#IndemExcess').val("");
        }
    });

});

function validateApplication() {

    let errors = [];

    if ($('#ApplicantName').val() === "") {
        errors.push("Applicant Name Is Required");
    }

    if ($('#ApplicantPosition').val() === "") {
        errors.push("Applicant Position Is Required");
    }

    if ($('#CompanyName').val() === "") {
        errors.push("Company Name Is Required");
    }

    //Check valid email
    let emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if (!emailRegex.test($('#CompanyEmail').val()) && $('#CompanyEmail').val() !== "") {

        errors.push("Company Email Address is Invalid");
    }
 
    //Check emails are not empty
    if ($('#CompanyEmail').val() === "") {
        errors.push("Company Email Address Is Required");
    }

    let telRegex = /^(?:(?:\(?(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?(?:\(?0\)?[\s-]?)?)|(?:\(?0))(?:(?:\d{5}\)?[\s-]?\d{4,5})|(?:\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3}))|(?:\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4})|(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}))(?:[\s-]?(?:x|ext\.?|\#)\d{3,4})?$/g
    let mobRegex = /^(07[\d]{8,12}|447[\d]{7,11})$/g;
    if (!telRegex.test($('#CompanyTel').val()) && $('#CompanyTel').val() !== "") {
        if (!mobRegex.test($('#CompanyTel').val())) {
            errors.push("Company Phone Number is Invalid");
        }
    }

    if ($('#CompanyTel').val() === "") {
        errors.push("Company Phone Number Is Required");
    }

    if ($('#TradingAddress').val() === "") {
        errors.push("Trading Address Is Required");
    }

    if ($('#EstablishedDate').val() === "") {
        errors.push("Company Established Date Is Required");
    }

    if ($('#FinancialYearEnd').val() === "") {
        errors.push("Financial Year Date Is Required");
    }

    if ($('#CompanyRegNo').val() === "") {
        errors.push("Company Registration Number Is Required");
    }

    if ($('#FCAAuth').val() === "null") {
        errors.push("Company Authorisation Status Is Required");
    }

    if ($('#BusinessType').val() === "null") {
        errors.push("Business Type Is Required");
    }

    if ($('#FirstApplicantName').is(':visible') && $('#FirstApplicantName').val() === "") {
        errors.push("First Applicant Name Is Required");
    }

    if ($('#FirstApplicantAddress').is(':visible') && $('#FirstApplicantAddress').val() === "") {
        errors.push("First Applicant Address Is Required");
    }

    if ($('#FirstApplicantHomeOwner').is(':visible') && $('#FirstApplicantHomeOwner').val() === "null") {
        errors.push("First Applicant Home Owner Status Is Required");
    }

    if ($('#SecondApplicantName').is(':visible') && $('#SecondApplicantName').val() === "") {
        errors.push("Second Applicant Name Is Required");
    }

    if ($('#SecondApplicantAddress').is(':visible') && $('#SecondApplicantAddress').val() === "") {
        errors.push("Second Applicant Address Is Required");
    }

    if ($('#SecondApplicantHomeOwner').is(':visible') && $('#SecondApplicantHomeOwner').val() === "null") {
        errors.push("Second Applicant Home Owner Status Is Required");
    }

    if ($('#FCAFirmRef').is(':visible') && $('#FCAFirmRef').val() === "") {
        errors.push("FCA Reference Number Is Required");
    }

    if ($('#PrincipalName').is(':visible') && $('#PrincipalName').val() === "") {
        errors.push("Appointed Firm Name Is Required");
    }

    if ($('#PrincipalTelNo').is(':visible') && $('#PrincipalTelNo').val() === "") {
        errors.push("Appointed Firm Phone Number Is Required");
    }

    if ($('#PrincipalAddress').is(':visible') && $('#PrincipalAddress').val() === "") {
        errors.push("Appointed Firm Address Is Required");
    }

    if ($('#IndemInsurer').val() === "") {
        errors.push("Professional Indemnity Insurer Name Is Required");
    }

    if ($('#IndemPolicyNumber').val() === "") {
        errors.push("Professional Indemnity Policy Number Is Required");
    }

    if ($('#IndemRenewalDate').val() === "") {
        errors.push("Professional Indemnity Renewal Date Is Required");
    }

    if ($('#IndemLimit').val() === "") {
        errors.push("Professional Indemnity Cover Limit Is Required");
    }

    if ($('#IndemExcess').val() === "") {
        errors.push("Professional Indemnity Excess Is Required");
    }

    if ($('#CriminalConvictions').val() === "null") {
        errors.push("Criminal Convictions Declaration Is Required");
    }

    if ($('#CriminalConvictionsInfo').is(':visible') && $('#CriminalConvictionsInfo').val() === "") {
        errors.push("Criminal Convictions Information Is Required");
    }

    if ($('#AgencyTerminated').val() === "null") {
        errors.push("Agency Termination Declaration Is Required");
    }

    if ($('#AgencyTerminatedInfo').is(':visible') && $('#AgencyTerminatedInfo').val() === "") {
        errors.push("Agency Termination Information Is Required");
    }



   

    return errors;

}

