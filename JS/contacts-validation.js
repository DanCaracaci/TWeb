$(function(){

    $("#name_error_message").hide();
    $("#email_error_message").hide();
    
    var error_name = false;
    var error_email = false;
    
    $("#name").focusout(function(){
        checkname();
    });
    $("#email").focusout(function(){
        checkemail();
    });
    
    function checkname(){
    
    var pattern = /^[a-zA-Z-' ]*$/;
    var name = $("#name").val();
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
    
        var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var email = $("#email").val();
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
    
    
    $("#form").submit(function(){
    
        error_name = false;
        error_email = false;
    
      checkname();
      checkemail();
    
      /*if(error_name === false && error_email === false){
       alert("Trimis cu succes");
          return true;
      }else{
        alert("Vă rugăm să completați corect formularul");
          return false;
      }*/
        if ( error_email === false && error_password === false) {
            $("#error_error_message").html("Succes");
            return true;
        } else {
            $("#error_error_message").html("Completati campurile");
            return false;
        }
    
    });
    });