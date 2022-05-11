<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$name = $_POST['name'];
$email = $_POST['email'];
$success = "Success!";

if(empty($name)){
    $name_error = 'Numele dvs. nu este introdus';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
    $name_error = 'Numele tău ar trebui să conțină doar caractere';
}

if(empty($email)){
    $email_error = 'Numele dvs. nu este introdus';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_error = 'E-mailul dvs. nu este valid';
}
}
include('contacts.php');
?>
