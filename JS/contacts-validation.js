
$("#name_error_message").hide();
$("#email_error_message").hide();

let error_name = false;
let error_email = false;

function checkname(){

    let pattern = /^[a-zA-Z-' ]*$/;
    let name = $("#name").val();
    if(pattern.test(name) && name !== ''){
        $("#name_error_message").hide();
        $("#name").css("border-bottom", "2px solid #34F458");
    }else{
        $("#name_error_message").html("Ar trebui să conțină numai caractere");
        $("#name_error_message").show();
        $("#name").css("border-bottom", "2px solid #F90A0A");
        error_name = true;
    }
}

function checkemail(){

    let pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    let email = $("#email").val();
    if(pattern.test(email) && email !== ''){
        $("#email_error_message").hide();
        $("#email").css("border-bottom", "2px solid #34F458");
    }else{
        $("#email_error_message").html("Email incorect");
        $("#email_error_message").show();
        $("#email").css("border-bottom", "2px solid #F90A0A");
        error_email = true;
    }
}

$("#name").focusout(function(){
    checkname();
});
$("#email").focusout(function(){
    checkemail();
});

function valid(){
    error_name = false;
    error_email = false;

    checkname();
    checkemail();

    if ( error_email === false && error_name === false) {
        return true;
    } else {
        $("#validationText").text("Completati campurile");
        return false;
    }
}


$("form").submit(function(event){
    event.preventDefault();
    let name = $("#name").val();
    let email = $("#email").val();
    if(valid()===true){

        $.ajax({
            url: "contact-form.php",
            method: "POST",
            data: {name:name, email:email},
            dataType: "JSON",
            success:function(result){
                $("#validationText").text(result);
            }
        });
    }

});