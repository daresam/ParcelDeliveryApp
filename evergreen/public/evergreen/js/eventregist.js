
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
    var designate = $('#Designate');

    var nameRegex = /^[a-zA-Z\s]+$/;
    var numberRegex = /^([0-9]{11,15})$/;
    var emailPattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    $('#eventRegFmId #submitBtn').click(function (e) {
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

        if(designate.val().trim() === '') {
            $('.designateErr').text('The Designate field is required');
            isValid = false;
        }

        if(isValid === false) {
            e.preventDefault();
        }

    });

    isSelected(designate, 'This field is required', $('.designateErr'));

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
            // isValid = true;
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
});