<?php 
if(!isset($success)){
    $success = '';
}
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link href="/CSS/style.css" rel="stylesheet"/>
    <link href="/CSS/styleforma.css" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header>
        <div class="menu">
            <a class="now left" href="index.php">Main</a>
            <a class="left" href="/PHP/istorie.php">Istorie</a>
            <a class="left" href="/PHP/organizare.php">Organizare</a>
            <a class="left" href="/PHP/mostenire.php">Moștenire</a>
            <a class="left" href="/PHP/sign_up.php">Sign Up</a></li>
            <a class="left" href="/PHP/contacts.php">Contacts</a></li>
            <a class="left" href="/PHP/sign_in.php">Sign in</a></li>
            <span class="them"> Theme:</span>
            <span class="col w" onclick="change('white')" ></span>
            <span class="col s" onclick="change('sepia')"></span>
            <span class="col b" onclick="change('black')"></span>


            <button class="knopka" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>
            <button class="knopka" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register</button>
        </div>
    <br>
    <br>
    
<div class="content-area content-area-contacts">
    <div class="contact_us"> 
    
    <h1>Contact us</h1>

<div class="form_container">
    <form action="contact-form.php" id="form" method="POST">
        <input type="text" id="name" name="name" placeholder="Numele/Prenumele">
            <br>
            <br>
        <p class="error_form" id="name_error_message"></p>
        <input type="text" id="email" name="email" placeholder="Email">
            <br>
            <br>
        <p class="error_form" id="email_error_message"></p>
        <input type="text" id="message" name="message" placeholder="Mesajul">
            <br>
            <br>
        <input type="submit" id="submit" value="Send" name="submit">
        <p id="validationText"></p>
                <?php if(isset($name_error)){ ?>
                    <p class="php_error"> <?php echo $name_error ?> </p>
                <?php } ?>
                <?php if(isset($email_error)){ ?>
                    <p class="php_error"> <?php echo $email_error ?> </p>
                <?php } ?>
                <?php if(!isset($name_error) && !isset($email_error)){ ?>
                    <p class="php_error"> <?php echo $success ?> </p>
                <?php } ?>
    </form>
</div>
</div>
</div>
</div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/JS/contacts-validation.js"></script>
    <script src="/JS/java.js"></script>
</body>
</html>