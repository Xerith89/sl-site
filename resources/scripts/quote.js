let claimCount = 0;
function msieversion() 
{
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0) // If Internet Explorer, return version number
    {
        alert(parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))));
    }
    else  // If another browser, return 0
    {
        
    }

    return false;
}
$(document).ready(() => {

    const ua = window.navigator.userAgent;
    const msie = ua.indexOf("MSIE ");

    if (msie > 0) // If Internet Explorer, return version number
    {
    }
    else  // If another browser, return 0
    {
        $('.ie-warning').remove();
    }


    //disable enter submitting form
    $(window).keydown((e) => {
        if (e.keyCode == 13) {
            e.preventDefault();
        }
    })

    //Dynamically add our quote button
    $('.start-button').append(' <p class="lead">Simply click the button below to fill out the form.</p><button class="btn btn-primary btn-lg mr-5" id="start-quote" data-toggle="collapse" data-target="#details-collapse" role="button" aria-expanded="false" aria-controls="collapse">Start Quote</button>');
    $('.spinner').append('<div class="spinner-border mt-5" role="status"></div>');

    //Hide some elements on page load until required
    $('.spinner-border').hide();
    $('#details-collapse').hide();
    $('#upload-collapse').hide();
    $('#cover-collapse').hide();
    $('#property-collapse').hide();
    $('#submit-collapse').hide();
    $('.inner').hide();
    $('.corrie-section').hide();
    $('.prev-ins').hide();
    $('.prevpol').hide();
    $('.usage').hide();
    $('.rel-to-prop-moreinfo').hide();
    $('.prop-details-moreinfo').hide();
    $('.floodsub-moreinfo').hide();
    $('.claim-history').hide();
    $('.engi').hide();
    $('.emp-lia').hide();
    $('.dando-indem').hide();
    $('.more-details').hide();
    $('.unocc').hide();
    $('.hmo').hide();
    $('.build-type').hide();
    $('.ern-exempt').hide();
    $('.ern').hide();
    $('.landlord-suminsured').hide();

    if (!$('#start-quote').length) {
        $('#details-collapse').show();
    }

    //If we click start quote, show spinner for a second then hide and uncollapse first quote section
    $('#start-quote').click((e) => {
        e.preventDefault();
        $('body').css('background-color', 'grey');
        $('body').css('opacity', '0.5');
        $('.result').empty();
        $('.spinner-border').show();
        setTimeout(() => {
            $('.spinner-border').hide();
            $('#details-collapse').show();
            $('#start-quote').remove();
            $('body').css('background-color', '#f0e9e9');
            $('body').css('opacity', '1.0');
            window.focus();
            window.scrollTo(0, 400);
        }, 1000);

    });

    $('.the-property').click((e) => {
        e.preventDefault();
        //Validate our details page
        let result = [];
        $(".errors").empty();
        result = validateDetails();
        //If result is empty then we have no errors
        if (!result.length) {
            $('.spinner-border').show();
            $('#details-collapse').hide();
            $('#cover-collapse').hide();
            $('#submit-collapse').hide();
            $('body').css('background-color', 'grey');
            $('body').css('opacity', '0.5');
            setTimeout(() => {
                $('.spinner-border').hide();
                $('#property-collapse').show();
                $('body').css('background-color', '#f0e9e9');
                $('body').css('opacity', '1.0');
                window.focus();
                window.scrollTo(0, 400);
            }, 1000);

        } else {
            //We have errors
            result.forEach((element) => {
                $(".errors").append('<div class="alert alert-danger" role="alert">' + element + '</div>');
            });
            window.focus();
            window.scrollTo(0, 400);
        }

    });

    $('.your-details').click((e) => {
        e.preventDefault();
        $('.spinner-border').show();
        $('#property-collapse').hide();
        $('#cover-collapse').hide();
        $('#submit-collapse').hide();
        $('body').css('background-color', 'grey');
        $('body').css('opacity', '0.5');
        setTimeout(() => {
            $('.spinner-border').hide();
            $('#details-collapse').show();
            $('body').css('background-color', '#f0e9e9');
            $('body').css('opacity', '1.0');
            window.focus();
            window.scrollTo(0, 400);
        }, 1000);

    });

    $('.cover-details').click((e) => {
        e.preventDefault();
        //Validate Property Details
        let result = [];
        $(".errors").empty();
       result = validateProperty();
        if (!result.length) {
            let claimsDetails = [];
            for (let i = 0; i < totalClaims.length; i++) {
                let id = totalClaims[i];
                claimsDetails.push($('#' + id + '-date').val());
                claimsDetails.push($('#' + id + '-cost').val());
                claimsDetails.push($('#' + id + '-peril').val());
                claimsDetails.push($('#' + id + '-desc').val());
            }
            $('#claims-details').val(claimsDetails);
            $('body').css('background-color', 'grey');
            $('body').css('opacity', '0.5');
            $('.spinner-border').show();
            $('#property-collapse').hide();
            $('#details-collapse').hide();
            $('#submit-collapse').hide();
            setTimeout(function() {
                $('.spinner-border').hide();
                $('#cover-collapse').show();
                $('body').css('background-color', '#f0e9e9');
                $('body').css('opacity', '1.0');
                window.focus();
                window.scrollTo(0, 400);
            }, 1000);
        } else {
            //We have errors
            result.forEach((element) => {
                $(".errors").append('<div class="alert alert-danger" role="alert">' + element + '</div>');
            });
            window.focus();
            window.scrollTo(0, 400);
        }

    });

    $('.submit').click((e) => {
        e.preventDefault();
        //Validate Cover Details
        let result = [];
        $(".errors").empty();
        result = validateCover();
        if (!result.length) {
            $('body').css('background-color', 'grey');
            $('body').css('opacity', '0.5');
            $('.spinner-border').show();
            $('#property-collapse').hide();
            $('#details-collapse').hide();
            $('#cover-collapse').hide();
            setTimeout(() => {
                $('.spinner-border').hide();
                $('#submit-collapse').show();
                $('body').css('background-color', '#f0e9e9');
                $('body').css('opacity', '1.0');
            }, 1000);
        } else {
            //We have errors
            result.forEach((element) => {
                $(".errors").append('<div class="alert alert-danger" role="alert">' + element + '</div>');
            });
            window.focus();
            window.scrollTo(0, 400);
        }
    });

    let allowSubmit = false;
    $('#consent').change(() => {
        if (!$('#consent').prop('checked')) {
            allowSubmit = false;
        } else {
            allowSubmit = true;
        }
    });

    $('#submit-btn').click((e) => {
        if (!allowSubmit) {
            e.preventDefault();
        } else {
            return true;
        }
    });

    //********************************* DETAILS ****************************************/
    $('#relationship').change(() => {
        if ($('#relationship').val() == "other") {
            $(".inner").slideDown();
        } else {
            $(".inner").slideUp();
        }
    });

    //Populate PH name when proposer is selected as relationship
    $('#relationship').change(() => {
        if ($('#relationship').val() == "proposer") {
            $(".prev-ins").slideDown();
            $('#phname').val("");
            $('#phname').val($('#fname').val() + " " + $('#middlename').val() + " " + $('#surname').val());
        } else {
            $(".prev-ins").slideUp();
        }
    });

    //Populate the corrie address fields if checkbox selected
    $('#corrieadd').change(() => {
        if ($('#corrieadd').prop('checked')) {

            $(".corrie-section").slideDown();
        } else {
            $(".corrie-section").slideUp();
        }
    });

    //populate the prev ins number field if checkbox selected

    $("#previnsadd").change(() => {
        if ($("#previnsadd").prop("checked")) {
            $(".prevpol").slideDown();
        } else {
            $(".prevpol").slideUp();
        }
    });

    $('#rel-to-prop').change(() => {
        if ($('#rel-to-prop').val() == "other") {
            $('.rel-to-prop-moreinfo').slideDown();
        } else {
            $('.rel-to-prop-moreinfo').slideUp();
        }
    })

    $('.rel-to-prop-moreinfo').on("keypress", (e) => {
        if (e.keyCode == 13) {
            $('.rel-to-prop-moreinfo').val($('.rel-to-prop-moreinfo').val() + '\n');
            return false;
        } else {
            return true;
        }
    });
    //Apply on change listeners to statements drop downs - this check the prev value and then the new value before incrementing or decrementing the amount of No's

    $('#ccj').change(() => {
        checkDropdown();
    });


    $('#bankrupt').change(() => {
        checkDropdown();
    });


    $('#declined').change(() => {
        checkDropdown();
    });


    $('#recovery').change(() => {
        checkDropdown();
    });


    $('#prosecuted').change(() => {
        checkDropdown();
    });


    $('#liquidated').change(() => {
        checkDropdown();
    });


    $('#disqualified').change(() => {
        checkDropdown();
    });


    $('#convictions').change(() => {

        checkDropdown();
    });


    //********************************* PROPERTY ****************************************/

    //Populate question about flats in commercial properties
    $('#proptype').change(() => {
        if ($('#proptype').val() == "commercial") {
            //We should be asking about residential areas, nature of business
            //Any residential areas triggers how many flats and how many unoccupied
            $('.unocc').slideUp();
            $('.usage').slideDown();
            $('.converted').slideUp();
            $('.numflats').slideUp();
            $('.build-type').slideUp();
            $('.unocflats').slideUp();
            $('#resi-areas').slideDown();
            $('#landlord-suminsured').slideUp();
            if ($('#resi-areas').val() === "yes") {
                $('.unocflats').slideDown();
                $('.numflats').slideDown();
            }
        }
        //If we are a block then we don't need usage, unoccupancy, hmo or build type
        //We do need the others
        if ($('#proptype').val() === "block-of-flats") {
            $('#landlord-suminsured').slideUp();
            $('.unocc').slideUp();
            $('.usage').slideUp();
            $('.hmo').slideUp();
            $('.numflats').slideDown();
            $('.converted').slideDown();
            $('.unocflats').slideDown();
            $('.build-type').slideUp();
            //Slide down build type if this is an other
            if ($('#converted').val() == "other") {
                $('.build-type').slideDown();
            }
        }
        //Otherwise we're a let or contents and just need year of build
        else if ($('#proptype').val() === "let") {
            $('.unocc').slideDown();
            $('.numflats').slideUp();
            $('.usage').slideUp();
            $('.converted').slideUp();
            $('.hmo').slideDown();
            $('.build-type').slideUp();
            $('.unocflats').slideUp();
            $('.landlord-suminsured').slideUp();
        }
        else if ($('#proptype').val() === "contents-only")
        {
            $('.unocc').slideDown();
            $('.numflats').slideUp();
            $('.usage').slideUp();
            $('.converted').slideUp();
            $('.hmo').slideDown();
            $('.build-type').slideUp();
            $('.unocflats').slideUp();
            $('.landlord-suminsured').slideDown();
        }
    });

    $('#resi-areas').change(() => {
        if ($('#resi-areas').val() == "yes") {
            $('.numflats').slideDown();
            $('.unocflats').slideDown();
            $('.hmo').slideDown();
        } else {
            $('.numflats').slideUp();
            $('.unocflats').slideUp();
            $('.hmo').slideUp();
        }
    });

    $("#converted").change(() => {
        if ($('#converted').val() == "other") {
            $('.build-type').slideDown();
        } else {
            $('.build-type').slideUp();
        }
    });

    $('#numflats').change(() => {
        $('#dando-numflats').val($('#numflats').val());
    });

    $('#numstoreys').change(() => {
        $('#engi-numstoreys').val($('#numstoreys').val());
    });
    $('#numlifts').change(() => {
        $('#engi-numlifts').val($('#numlifts').val());
    });

    //More info for state of repair/construction
    $('#repair').change(() => {
        toggleMoreInfo()
    });
    $('#construction').change(() => {
        toggleMoreInfo()
    });
    $('#works').change(() => {
        toggleMoreInfo()
    });
    $('#hmo').change(() => {
        toggleMoreInfo()
    });
    $('#unoccupied').change(() => {
        toggleMoreInfo()
    });

    //More info for subs/flood
    $('#flood').change(() => {

        if ($('#flood').val() == "yes" || $('#subs').val() == "yes") {

            $('.floodsub-moreinfo').slideDown();
        } else if ($('#flood').val() != "yes" && $('#subs').val() != "yes") {

            $('.floodsub-moreinfo').slideUp();
        }
    });

    $('#subs').change(() => {

        if ($('#flood').val() == "yes" || $('#subs').val() == "yes") {

            $('.floodsub-moreinfo').slideDown();
        } else if ($('#flood').val() != "yes" && $('#subs').val() != "yes") {

            $('.floodsub-moreinfo').slideUp();
        }

    });

    //Handle Add Claim Click
    let totalClaims = [];
    $('#add-claim').click((e) => {
        e.preventDefault();
        claimCount++;
        $('.claims').append(`<div class="claim${claimCount}">`);
        $('.claim' + claimCount).append('<div class="col-3 mb-2">')
        $('.claim' + claimCount).append('<label for="claim-date">Date of Claim <small><i class="fas fa-asterisk fa-xs"></i></small></label>');
        $('.claim' + claimCount).append(`<input type="date" class="form-control form-control-sm" name="claim${claimCount}-date" id="claim${claimCount}-date" >`);
        $('.claim' + claimCount).append('</div>');
        $('.claim' + claimCount).append('<div class="col-3 mb-2">')
        $('.claim' + claimCount).append('<label for="claim-cost">Claim Cost <small><i class="fas fa-asterisk fa-xs"></i></small></label>');
        $('.claim' + claimCount).append(`<input type="number" min="0.00" max="10000.00" step="100" name="claim${claimCount}-cost" class="form-control input-icon form-control-sm input-icon-right" id="claim${claimCount}-cost"> `);
        $('.claim' + claimCount).append('</div>');
        $('.claim' + claimCount).append('<div class="col-3 mb-2">')
        $('.claim' + claimCount).append('<label for="claim-peril">Claim Peril <small><i class="fas fa-asterisk fa-xs"></i></small></label>');
        $('.claim' + claimCount).append(`<select class="form-control form-control-sm" id="claim${claimCount}-peril" name="claim${claimCount}-peril" >
        <option value="Accidental Damage">Accidental Damage</option>
        <option value="Aircraft">Aircraft</option>
        <option value="Attempted Theft">Attempted Theft</option>
        <option value="Breakage of Fixed Glass">Breakage of Fixed Glass</option>
        <option value="Civil Commotion">Civil Commotion</option>
        <option value="Concern for Welfare">Concern for Welfare</option>
        <option value="Directors and Officers">Directors and Officers</option>
        <option value="Earthquake">Earthquake</option>
        <option value="Employers Liability">Employers' Liability</option>
        <option value="Escape Of Water">Escape Of Water</option>
        <option value="Escape Of Oil">Escape Of Oil</option>
        <option value="Eviction of Squatters">Eviction of Squatters</option>
        <option value="Explosion">Explosion</option>
        <option value="Fire">Fire</option>
        <option value="Flood">Flood</option>
        <option value="Heave">Heave</option>
        <option value="Impact">Impact</option>
        <option value="Landslip">Landslip</option>
        <option value="Legal Expenses">Legal Expenses</option>
        <option value="Lightning">Lightning</option>
        <option value="Malicious Damage">Malicious Damage</option>
        <option value="Other">Other (Please Describe Below)</option>
        <option value="Public Liability">Public Liability</option>
        <option value="Storm">Storm</option>
        <option value="Subsidence">Subsidence</option>
        <option value="Terrorism">Terrorism</option>
        <option value="Theft">Theft</option>
        <option value="Trace And Access">Trace And Access</option>
        <option value="Vandalism">Vandalism</option></select>`);

        $('.claim' + claimCount).append('</div>');
        $('.claim' + claimCount).append('<div class="col-3 mb-2">')
        $('.claim' + claimCount).append('<label for="claim-description">Claim Description <small><i class="fas fa-asterisk fa-xs"></i></small></label>');
        $('.claim' + claimCount).append(`<textarea rows="4" class="form-control" cols="10" id= "claim${claimCount}-desc" name="claim${claimCount}-desc" placeholder="Please Enter a Brief Description of the Claim"></textarea>`);
        $('.claim' + claimCount).append('</div>');
        $('.claim' + claimCount).append('<div class="col-3 mb-2">')
        $('.claim' + claimCount).append(`<button type="button" id="claim${claimCount}" class="btn btn-danger mb-4">Delete Claim</button`);
        $('.claim' + claimCount).append('</div>');
        $('.claim' + claimCount).append('</div>');
        $('.claims').append('</div>');

        totalClaims.push(`claim${claimCount}`);
    });

    //Handle remove claim
    $('.claims').on('click', 'button', (e) => {
        $("." + e.target.id).remove();
        let index = totalClaims.findIndex(element => element == e.target.id);
        totalClaims = totalClaims.slice(index);
    });

    $('#claimdec').change(() => {
        if ($('#claimdec').val() == "yes") {
            $('.claim-history').slideDown();
        } else {
            $('.claim-history').slideUp();
        }
    });

    //********************************* COVER ****************************************/
    let rebuild;
    let commonArea;
    let landlordSum;
    let curPrem;
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

    $('#landlord-suminsured').on('input', () => {
        landlordSum = parseInt($('#landlord-suminsured').val());
        if (isNaN(landlordSum)) {
            $('#landlord-suminsured').val("");
        }
        landlordSum = numberWithCommas(landlordSum);
    });
    $('#landlord-suminsured').on('blur', () => {
        $('#landlord-suminsured').val(landlordSum);
        if ($('#landlord-suminsured').val() == "NaN") {
            $('#landlord-suminsured').val("");
        }
    });
    //Replace common area with comma separated version
    $('#commonarea').on('input', () => {
        commonArea = parseInt($('#commonarea').val());
        //25k included free of charge
        if (commonArea < 25000) {
            commonArea = 25000;
        }
        if (isNaN(commonArea)) {
            $('#commonarea').val("");
        }
        commonArea = numberWithCommas(commonArea);
    });
    $('#commonarea').on('blur', () => {
        $('#commonarea').val(commonArea);
        if ($('#commonarea').val() == "NaN") {
            $('#commonarea').val("25,000");
        }
    });
    //Replace common area with comma separated version
    $('#curprem').on('input', () => {
        curPrem = parseInt($('#curprem').val());
        if (isNaN(curPrem)) {
            $('#curprem').val("");
        }
        curPrem = numberWithCommas(curPrem);
    });
    $('#curprem').on('blur', () => {
        $('#curprem').val(curPrem);
        if ($('#curprem').val() == "NaN") {
            $('#curprem').val("");
        }
    });

    $('#start-date').on('click', () => {
        //Basic settings for datepicker
        $("#start-date").datepicker({
            dateFormat: 'dd-M-yy',
            minDate: 0,
            changeYear: true
        });
        $("#start-date").datepicker("show");
    });

    $('#engi').change(() => {
        if ($('#engi').prop("checked")) {
            $(".engi").slideDown();
        } else {
            $(".engi").slideUp();
        }
    });

    $('#engi-numlifts').change(() => {
        $('#numlifts').val($('#engi-numlifts').val());
    });

    $('#engi-numstoreys').change(() => {
        $('#numstoreys').val($('#engi-numstoreys').val());
    });

    $('#dando').change(() => {
        if ($('#dando').prop("checked")) {
            $('.dando-indem').slideDown();
        } else {
            $('.dando-indem').slideUp();
        }
    });

    $('#dando-numflats').change(() => {
        $('#numflats').val($('#dando-numflats').val());
    });

    $('#emplia').change(() => {
        if ($('#emplia').prop("checked")) {
            $('.emp-lia').slideDown();
        } else {
            $('.emp-lia').slideUp();
        }
    });

    $('#has-staff').change(() => {
        if ($('#has-staff').prop("checked")) {
            $('.ern-exempt').slideDown();
            $('.ern').slideDown();
        } else {
            $('.ern-exempt').slideUp();
            $('.ern').slideUp();
        }
    });

    $('#ern-exempt').change(() => {
        if ($('#ern-exempt').prop("checked")) {
            $('.ern').slideUp();
        } else {
            $('.ern').slideDown();
        }
    });


    //********************************* SUBMIT ****************************************/

    //Disable submit if no checkbox
    $('#consent').change(() => {
        if ($('#consent').prop('checked')) {
            $('#submit-btn').removeClass("disabled");
            $('#submit-btn').css("cursor", "pointer");
            $('#submit-btn').removeAttr("disabled");
        } else {
            $('#submit-btn').attr("disabled", true);
            $('#submit-btn').addClass("disabled");
            $('#submit-btn').css("cursor", "not-allowed");
        }
    });



    // document ready  
});

function toggleMoreInfo() {
    if ($('#repair').val() == "no" || $('#construction').val() == "no" || $('#works').val() == "yes" || $('#hmo').val() == "yes" || $('#unoccupied').val() == "yes") {
        $('.prop-details-moreinfo').slideDown();

    } else if ($('#repair').val() != "no" && $('#construction').val() != "no" && $('#works').val() != "yes" && $('#hmo').val() != "yes" && $('#hmo').val() != "yes" && $('#unoccupied').val() != "yes") {

        $('.prop-details-moreinfo').slideUp();
    }
}

//replace commas in numbers
function numberWithCommas(inputNumber) {
    return inputNumber.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
}

/*********************VALIDATE DETAILS PAGE ******************************/
function validateDetails() {

    let errors = [];

    //Make sure name is filled in
    if ($('#fname').val() === "" || $('#surname').val() === "") {
        errors.push("Please Provide First Name and Surname");
    }

    //Check Relationship is filled
    if ($('#relationship').val() == "notselected") {
        errors.push("Please Select Relationship to Proposer");
    }

    //Check Relationship is filled is other is selected
    if ($('#relationship').val() == "other" && $('#relationship-info').val() == "") {
        errors.push("Please Provide Relationship to Proposer");
    }

    //Check phone numbers are valid
    let telRegex = /^(?:(?:\(?(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?(?:\(?0\)?[\s-]?)?)|(?:\(?0))(?:(?:\d{5}\)?[\s-]?\d{4,5})|(?:\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3}))|(?:\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4})|(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}))(?:[\s-]?(?:x|ext\.?|\#)\d{3,4})?$/g
    let mobRegex = /^(07[\d]{8,12}|447[\d]{7,11})$/g;
    if (!telRegex.test($('#telephone').val()) && $('#telephone').val() != "") {
        if (!mobRegex.test($('#telephone').val())) {
            errors.push("Telephone Number is Invalid");
        }
    }

    if ($('#telephone').val() === "") {
        errors.push("Telephone Number Is Required");
    }

    //Check valid email
    let emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if (!emailRegex.test($('#email').val())) {

        errors.push("Email Address is Invalid");
    }

    //Check emails are not empty
    if ($('#email').val() === "") {
        errors.push("Email Address Is Required");
    }
    if ($('#confirm-email').val() === "") {
        errors.push("Confirm Email Is Required");
    }

    //Make sure email addresses match
    if ($('#email').val() != $('#confirm-email').val() && $('#email').val() != "") {
        errors.push("Email Addresses Do Not Match");
    }

    //If Corrie is ticked then we need to validate those boxes aren't empty
    if ($('#corrieadd').prop('checked')) {

        if ($('#house-number').val() == "") {
            errors.push("House Name/Number Is Required");
        }

        if ($('#street').val() === "") {
            errors.push("First Line of Address Is Required");
        }

        if ($('#city').val() === "") {
            errors.push("City Is Required");
        }

        if ($('#county').val() === "") {
            errors.push("County Is Required");
        }
        if ($('#postcode').val() === "") {
            errors.push("Post Code Is Required");
        }

    }

    if ($('#phname').val() === "" || $('#phname').val() === " " || $('#phname').val() === "  ") {
        errors.push("Proposer Name Is Required");
    }


    //Check drop down boxes are yes or no
    if ($('#ccj').val() == "" || $('#bankrupt').val() == "" || $('#recovery').val() == "" || $('#declined').val() == "" || $('#prosecuted').val() == "" ||
        $('#liquidated').val() == "" || $('#disqualified').val() == "" || $('#convictions').val() == "") {
        errors.push("One or More Dropdowns is Incomplete");
    }

    if ($('#rel-to-prop').val() == "") {
        errors.push("Please Provide Policyholder Relationship To Property");
    }

    if ($('#rel-to-prop-moreinfo').is(':visible') && $('#rel-to-prop-moreinfo').val() == "") {
        errors.push("Please Provide More Information About Policyholder Relationship To Property");
    }

    if ($('#statementsinfo').is(':visible') && $('#statementsinfo').val() == "") {
        errors.push("Please Provide More Information Where You Have Answered Yes");
    }

    return errors;

}

/*********************VALIDATE PROPERTY PAGE ******************************/

function validateProperty() {
    let errors = []

    //Address must be filled
    if ($('#risknum').val() == "") {
        errors.push("House Name/Number Is Required");
    }

    if ($('#riskstreet').val() == "") {
        errors.push("First Line of Address Is Required");
    }

    if ($('#riskcity').val() == "") {
        errors.push("City Is Required");
    }

    if ($('#riskcounty').val() == "") {
        errors.push("County Is Required");
    }
    if ($('#riskpostcode').val() == "") {
        errors.push("Post Code Is Required");
    }

    if ($('.usage').is(':visible') && $('#usage').val() == "") {
        errors.push("Property Use Is Required");
    }

    if ($('#build-type').is(':visible') && $('#build-type').val() == "") {
        errors.push("Build Type Is Required");
    }

    if ($('.converted').is(':visible') && $('#converted').val() == "") {
        errors.push("Please Confirm If Purpose Built As Flats Or Converted");
    }

    if ($('.usage').is(':visible') && $('#resi-areas').val() == "") {
        errors.push("Please Confirm If There Are Residential Areas At The Property");
    }

    if ($('.numflats').is(':visible') && $('#numflats').val() == "") {
        errors.push("Number Of Flats Is Required");
    }

    if ($('.unocflats').is(':visible') && $('#unocflats').val() == "") {
        errors.push("Number Of Unoccupied Flats Is Required");
    }

    //Check year built is not in the future
    let currentYear = new Date().getFullYear();
    let inputYear = new Date($('#yearbuilt').val()).getFullYear();
    if (inputYear > currentYear) {
        errors.push("Year Built Cannot Be In The Future");
    }

    if ($('#yearbuilt').val() === "") {
        errors.push("Please Confirm Year Of Build");
    }

    //Check our drop downs have values

    if ($('#listed').val() === "") {
        errors.push("Please Select Listed Status");
    }

    if ($('#repair').val() === "") {
        errors.push("Please Confirm Good State Of Repair");
    }

    if ($('#construction').val() === "") {
        errors.push("Please Confirm Year Of Build");
    }

    if ($('#works').val() === "") {
        errors.push("Please Confirm If Property Is Undergoing Works");
    }
    if ($('#hmo').is(':visible') && $('#hmo').val() == "") {

        errors.push("Please Confirm HMO Status");
    }

    if ($('#unoccupied').is(':visible') && $('#unoccupied').val() === "") {
        errors.push("Please Confirm Unoccpancy");
    }

    //Check we have further info if the box exists
    if ($('#prop-details-moreinfo').is(':visible') && $('#prop-details-moreinfo').val() == "") {
        errors.push("Further Information Is Required");
    }

    //Check our drop downs have values
    if ($('#subs').val() === "") {
        errors.push("Please Confirm Previous Subsidence, Heave Or Landslip");
    }

    if ($('#flood').val() === "") {
        errors.push("Please Confirm Previous Flooding");
    }

    //Check we have further info if the box exists
    if ($('.fs-moreinfo').is(':visible') && $('.fs-moreinfo').val() == "") {
        errors.push("Please Provide Further Information About Flooding/Subsidence");
    }

    if ($('#claimdec').val() === "") {
        errors.push("Please Confirm If Any Previous Claims");
    }

    if ($('#claimdec').val() === "yes" && claimCount === 0) {
        errors.push("Please Provide Details Of Previous Claims");
    }

    //Validate claims fields - check none of them are empty
    //Get all the children of claims div, loop through and check their children's values
    let nodes = $('.claims').children();
    for (let i = 0; i < nodes.length; i++) {
        let children = ($("." + nodes[i].className).children());
        if (children[2].value == "") {
            errors.push("Claim Date Is Required");
        }
        if (children[5].value == "") {
            errors.push("Claim Cost Is Required");
        }
        if (children[11].value == "") {
            errors.push("Claim Description Is Required");
        }
    }

    return errors;
}

/*********************VALIDATE COVER PAGE ******************************/

function validateCover() {
    let errors = []

    if ($('#start-date').val() == "") {
        errors.push("Cover Start Date Is Required");
    }

    let currentDate = new Date();
    let inputDate = new Date($('#start-date').val());
    currentDate.setHours(0, 0, 0, 0);
    if (inputDate < currentDate) {
        errors.push("Start Date Cannot Be In The Past");
    }

    if ($('#rebuild').val() == "") {
        errors.push("Rebuild Cost Is Required");
    }

    if ($('#landlord-suminsured').is(':visible') && $('#landlord-suminsured').val() == "") {
        errors.push("Please Confirm Landlord Contents Sum Insured");
    }


    if ($('#dandoindem').is(':visible') && $('#dandoindem').val() == "") {
        errors.push("Please Select D&O Indemnity Level");
    }

    if ($('#engi-numstoreys').is(':visible') && $('#engi-numstoreys').val() == "") {
        errors.push("Number Of Storeys Is Required For Engineering Cover");
    }

    if ($('#engi-numlifts').is(':visible') && $('#engi-numlifts').val() == "") {
        errors.push("Number Of Lifts Is Required For Engineering Cover");
    }

    if ($('#dandoindem').is(':visible') && $('#dandoindem').val() == "") {
        errors.push("Number Of Flats Required For D&O Cover");
    }

    if ($('#ern').is(':visible') && $('#ern').val() == "") {
        errors.push("Employers Reference Number Is Required For Employers Liability Cover");
    }

    return errors;
}


//Add the element if we have a yes and it isn't already in
function checkDropdown() {
    if ($('#ccj').val() == "yes" || $('#bankrupt').val() == "yes" || $('#recovery').val() == "yes" || $('#declined').val() == "yes" || $('#prosecuted').val() == "yes" ||
        $('#liquidated').val() == "yes" || $('#disqualified').val() == "yes" || $('#convictions').val() == "yes") {
        $('.more-details').slideDown();
    } else {
        $('.more-details').slideUp();
    }

}