function slide(div, h){
    if(div.style.display === 'none') {
            div.style.display = 'block';
            h.textContent = 'ᐱ'
    }
    else{
        div.style.display = 'none';
        h.textContent = 'ᐯ'
    }
}

let currTheme
window.onload= function (){
    currTheme=localStorage.getItem("curent");
    change(currTheme);
}


function change(theme){
    localStorage.setItem("curent",theme);

    let colorb = 'white'
    let colorf = 'black'
    switch(theme) {
        case 'sepia': {
            colorb = "burlywood";
            colorf = "black"
            break;
        }
        case 'black': {
        colorb = 'black'
            colorf='white'

            break;
        }
    }
    document.body.style.backgroundColor = colorb;
    document.body.style.color = colorf;
}

let scrollToTopBtn = document.getElementById("TopBtn")
let rootElement = document.documentElement

scrollToTopBtn.addEventListener("click", scrollToTop)
function scrollToTop() {
    rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
    })
}

// Get the modal
var login = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == login) {
        login.style.display = "none";
    }
}

var reg = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == reg) {
        reg.style.display = "none";
    }
}

$(document).ready(function() {
    $("#forma").validate();
});


/*
function check_uname() {
    var pattern = /^[a-zA-Z]*$/;
    var fname = $("#form_fname").val();
    if (pattern.test(fname) && fname !== '') {
        $("#fname_error_message").hide();
        $("#form_fname").css("border-bottom","2px solid #34F458");
    } else {
        $("#fname_error_message").html("Câmpul trebuie să conțină numai caractere");
        $("#fname_error_message").show();
        $("#form_fname").css("border-bottom","2px solid #F90A0A");
        error_fname = true;
    }
}

function check_email() {
    var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = $("#form_email").val();
    if (pattern.test(email) && email !== '') {
        $("#email_error_message").hide();
        $("#form_email").css("border-bottom","2px solid #34F458");
    } else {
        $("#email_error_message").html("Adresa Email nevalidă");
        $("#email_error_message").show();
        $("#form_email").css("border-bottom","2px solid #F90A0A");
        error_email = true;
    }
}

function check_password() {
    var password_length = $("#form_password").val().length;
    if (password_length < 8) {
        $("#password_error_message").html("Cel puțin 8 caractere");
        $("#password_error_message").show();
        $("#form_password").css("border-bottom","2px solid #F90A0A");
        error_password = true;
    } else {
        $("#password_error_message").hide();
        $("#form_password").css("border-bottom","2px solid #34F458");
    }
}

function check_retype_password() {
    var password = $("#form_password").val();
    var retype_password = $("#form_retype_password").val();
    if (password !== retype_password) {
        $("#retype_password_error_message").html("Parolele nu coincid");
        $("#retype_password_error_message").show();
        $("#form_retype_password").css("border-bottom","2px solid #F90A0A");
        error_retype_password = true;
    } else {
        $("#retype_password_error_message").hide();
        $("#form_retype_password").css("border-bottom","2px solid #34F458");
    }
}
*/
