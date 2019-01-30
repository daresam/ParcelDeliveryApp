$(function () {
    console.log('hi');

    var name = $('#name');
    var email = $('#email');
    var subject = $('#subject');
    var message = $('#message');
    var isValid = true;

    $('#submitBtn').click(function (e) {

       // isValid = false;


        var nameRegex = /^[a-zA-Z\s]+$/;
        var numberRegex = /^[0-9]\d{11}/;
        var emailPattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if(name.val() === '' ){
            $('.nameErr').text('The Name field is required');
            isValid = false;
        }
        else if( name.val() !== '' ){
            if(!nameRegex.test(name.val())){
                $('.nameErr').text('Only Text is Allowed');
                isValid = false;
            }else {
                $('.nameErr').text('');
                isValid = true;
            }
        }

        if(email.val().trim() == ''){
            $('.emailErr').text('This Email is required ');
            isValid = false;
        }
        else if(email.val().trim() != ''){
            if(!emailPattern.test( email.val().trim() )){
                $('.emailErr').text(' Must be a valid email address.');
                isValid = false;
            }
            else{
                $('.emailErr').text('');
            }
        }

        if(subject.val() === '' ){
            $('.subjectErr').text('The Subject field is required');
            isValid = false;
        }
        else if( subject.val() !== '' ){
            if(!nameRegex.test()){
                $('.subjectErr').text('Only Text is Allowed');
                isValid = false;
            }else {
                $('.subjectErr').text('');
                isValid = true;
            }
        }

        if(message.val().trim() == '' ){
            $('.messageErr').text('The Message field is required');
            isValid = false;
        }

        if( isValid === false) {
            e.preventDefault();
        }


    });

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
        if(email.val().trim() !== ''){
            $('.emailErr').text('');
            // isValid = true;
        }
        else{
            $('.emailErr').text('The Email field is required');
        }
    });

    subject.keyup(function(){
        if(subject.val() !== ''){
            $('.subjectErr').text('');
            // isValid = true;
        }
        else{
            $('.subjectErr').text('The Subject field is required');
        }
    });

    message.keyup(function(){
        if(message.val() !== ''){
            $('.messageErr').text('');
            // isValid = true;
        }
        else{
            $('.messageErr').text('The Subject field is required');
        }
    });
});