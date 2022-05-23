<?php
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if(empty($fname)){
    $fname_error = 'Al prenumele nu este introdus';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
    $fname_error = 'Prenumele tău ar trebui să conțină doar caractere';
}else{
    $fname_error = NULL;
}

if(empty($sname)){
    $sname_error = 'Al numele nu este introdus';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$sname)){
    $sname_error = 'Al doilea nume ar trebui să conțină doar caractere';
}else{
    $sname_error = NULL;
}

if(empty($email)){
    $email_error = 'E-mailul dvs. nu este introdus';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_error = 'E-mailul dvs. nu este valid';
}else{
    $email_error = NULL;
}

if(empty($password)){
    $password_error = 'Parola dvs. nu este introdusă';
}elseif(strlen($password) < 8){
    $password_error = 'Parola trebuie să aibă cel puțin 8 caractere';
}else{
    $password_error = NULL;
}

if($password !== $password2){
    $password_error2 = 'Parolele nu s-au potrivit';
}else{
    $password_error2 = NULL;
}

if($fname_error == NULL && $sname_error == NULL && $email_error == NULL && $password_error == NULL
    && $password_error2 == NULL){
    $result = "Succes!";
    echo json_encode($result);
}else{
    $result = "Error";
    echo json_encode($result);
}
?>