<?php

$name = $_POST['name'];
$email = $_POST['email'];

if(empty($name)){
    $name_error = 'Numele dvs. nu este introdus';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
    $name_error = 'Numele tău ar trebui să conțină doar caractere';
}else{
    $name_error = NULL;
}

if(empty($email)){
    $email_error = 'Numele dvs. nu este introdus';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_error = 'E-mailul dvs. nu este valid';
}else{
    $email_error=NULL;
}

if($name_error == NULL && $email_error == NULL){
    $result = "Succes!";
    echo json_encode($result);
}else{
    $result = "Error";
    echo json_encode($result);
}

?>