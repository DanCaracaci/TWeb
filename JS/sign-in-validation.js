$(function(){

    $("#email_error_message").hide();
    $("#password_error_message").hide();
    $("#alert_error_message").hide();

    var error_email = false;
    var error_password = false;
      
     });
     $("#email").focusout(function() {
        check_email();
     });
     $("#password").focusout(function() {
        check_password();
    
     function check_password() {
        var password_length = $("#password").val().length;
        if (password_length < 8) {
           $("#password_error_message").html("Cel puțin 8 caracterers");
           $("#password_error_message").show();
           $("#password").css("border-bottom","2px solid #F90A0A");
           error_password = true;
        } else {
           $("#password_error_message").hide();
           $("#password").css("border-bottom","2px solid #34F458");
        }
     }


     function check_email() {
        var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var email = $("#email").val();
        if (pattern.test(email) && email !== '') {
           $("#email_error_message2").hide();
           $("#email").css("border-bottom","2px solid #34F458");
        } else {
           $("#email_error_message2").html("Email incorect");
           $("#email_error_message2").show();
           $("#email").css("border-bottom","2px solid #F90A0A");
           error_email = true;
        }
     }

    
    
     $("#form").submit(function() {
        error_email = false;
        error_password = false;

        check_email();
        check_password();


        if ( error_email === false && error_password === false) {
           $("#error_error_message").html("Succes");
           return true;
        } else {
           $("#error_error_message").html("Completati campurile");
           return false;
        }
     });
    });