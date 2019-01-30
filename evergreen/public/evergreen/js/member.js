
$(function () {

    //Clear Error when Selected element is change
    function isSelected(selector, errMsg, spanErr){
        selector.change(function(){
            if(selector.val() !== ''){
                spanErr.text('');
            }
            else{
                spanErr.text(errMsg);
            }
        });
    }

    var name = $('#FullName');
    var mobile = $('#MobileNumber');
    var email = $('#Email');
    var status = $('#Status');
    var marital = $('#MaritalStatus');
    var address = $('#Address');
    var dob = $('#DateOfBirth');
    var passport = $('#Passport');
    var denomination = $('#Denomination');

    var nameRegex = /^[a-zA-Z\s]+$/;
    var numberRegex = /^([0-9]{11,15})$/;
    var emailPattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    $('#memberFmId #submitFmId').click(function (e) {
        var isValid = true;

        if(name.val().trim() === '') {
            $('.nameErr').text('The Name field is required');
            isValid = false;
        }else if(name.val().trim() !== '') {
            if(!nameRegex.test(name.val().trim())){
                $('.nameErr').text('Only Text is Allowed');
                isValid = false;
            }else {
                $('.nameErr').text(' ');
                isValid = true;
            }
        }

        if(mobile.val().trim() === '') {
            $('.mobileErr').text('The Mobile Number field is required');
            isValid = false;
        }else if(mobile.val().trim() !== '') {
            if(!numberRegex.test(mobile.val().trim())){
                $('.mobileErr').text('Only digit is Allowed and must be 11 digits maximum');
                isValid = false;
            }else {
                $('.mobileErr').text(' ');
                isValid = true;
            }
        }

        if(email.val().trim() === '') {
            $('.emailErr').text('The Email field is required');
            isValid = false;
        }else if(email.val().trim() !== '') {
            if(!emailPattern.test(email.val().trim())){
                $('.emailErr').text('Must be a valid email address.');
                isValid = false;
            }else {
                $('.emailErr').text(' ');
                isValid = true;
            }
        }

        if(denomination.val().trim() === '') {
            $('.denominationErr').text('The Denomination field is required');
            isValid = false;
        }
        if(address.val().trim() === '') {
            $('.addressErr').text('The Address field is required');
            isValid = false;
        }

        if(status.val().trim() === '') {
            $('.statusErr').text('The Status field is required');
            isValid = false;
        }
        if(marital.val().trim() === '') {
            $('.maritalErr').text('The Marital Status field is required');
            isValid = false;
        }
        if(dob.val().trim() === '') {
            $('.dobErr').text('The Date of Birth field is required');
            isValid = false;
        }
        if(passport.val().trim() === '') {
            $('.passportErr').text('The Passport field is required');
            isValid = false;
        }

        if(isValid === false) {
            e.preventDefault();
        }

    });

    isSelected(status, 'This field is required', $('.statusErr'));
    isSelected(marital, 'This field is required', $('.maritalErr'));
    isSelected(dob, 'This field is required', $('.dobErr'));
    isSelected(passport, 'This field is required', $('.passportErr'));

    name.keyup(function(){
        if(name.val() !== ''){
            $('.nameErr').text('');
            // isValid = true;
        }
        else{
            $('.nameErr').text('The Name field is required');
        }
    });

    email.keyup(function(){
        if(email.val() !== ''){
            $('.emailErr').text('');
        }
        else{
            $('.emailErr').text('The Email field is required');
        }
    });

    mobile.keyup(function(){
        if(mobile.val() !== ''){
            $('.mobileErr').text('');
            // isValid = true;
        }
        else{
            $('.mobileErr').text('The Mobile Number field is required');
        }
    });

    denomination.keyup(function(){
        if(denomination.val() !== ''){
            $('.denominationErr').text('');
            // isValid = true;
        }
        else{
            $('.denominationErr').text('The Denomination field is required');
        }
    });

    address.keyup(function(){
        if(address.val() !== ''){
            $('.addressErr').text('');
            // isValid = true;
        }
        else{
            $('.addressErr').text('The Address field is required');
        }
    });

});