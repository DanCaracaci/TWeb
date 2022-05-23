
$("#email_error_message").hide();
$("#password_error_message").hide();

let error_email = false;
let error_password = false;

function check_password() {
    let password_length = $("#password").val().length;
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
    let pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    let email = $("#email").val();
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

$("#email").focusout(function() {
    check_email();
});
$("#password").focusout(function() {
    check_password();
});

function valid(){
    error_password = false;
    error_email = false;

    check_password();
    check_email();

    if ( error_email === false && error_password === false) {
        return true;
    } else {
        $("#validationText").text("Completati campurile");
        return false;
    }
}

$("form").submit(function(event) {
    event.preventDefault();
    let email = $("#email").val();
    let password = $("#password").val();
    if(valid()===true){

        $.ajax({
            url: "sign_in-validation.php",
            method: "POST",
            data: {email:email, password:password},
            dataType: "JSON",
            success:function(result){
                $("#validationText").text(result);
            }
        });
    }

});
