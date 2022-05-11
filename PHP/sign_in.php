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
    <link href="/CSS/style.css" rel="stylesheet"/>
    <link href="/CSS/styleforma.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Sign in</title>
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
    
    <h1>Sign in</h1>

    <p id="alert_error_message"></p>
<div class="form_container">
    <form action="sign_in-validation.php" id="form" method="post">
        <input type="text" id="email" name="email" placeholder="Email">
            <br>
            <br>
            <p class="error_form" id="email_error_message2"></p>
       
            <input type="password" id="password" name="password" placeholder="Parola">
            <br>
            <br>
        <p class="error_form" id="password_error_message"></p>
        <input type="submit" id="submit" value="Send" name="submit">
                <?php if(isset($email_error)){ ?>
                    <p class="php_error"> <?php echo $email_error ?> </p>
                <?php } ?>
                <?php if(isset($password_error)){ ?>
                    <p class="php_error"> <?php echo $password_error ?> </p>
                <?php } ?>

                <?php if(!isset($email_error) && !isset($password_error) ){ ?>
                <p class="php_error"> <?php echo $success ?> </p>
                <?php } ?>
    </form>
</div>
</div>
</div>
</div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/JS/sign-in-validation.js"></script>
    <script src="/JS/java.js"></script>
</body>
</html>