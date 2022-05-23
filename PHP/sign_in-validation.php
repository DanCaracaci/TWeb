<?php

$email = $_POST['email'];
$password = $_POST['password'];

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

if($password_error == NULL && $email_error == NULL){
    $result = "Succes!";
    echo json_encode($result);
}else{
    $result = "Error";
    echo json_encode($result);
}

?>