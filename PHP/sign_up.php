<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="/CSS/styleforma.css" rel="stylesheet"/>
    <link href="/CSS/style.css" rel="stylesheet"/>
</head>
<body>
<header>
    <div class="menu">
        <a class="left" href="/index.php">Main</a>
        <a class="left" href="/PHP/istorie.php">Istorie</a>
        <a class="left" href="/PHP/organizare.php">Organizare</a>
        <a class="left" href="/PHP/mostenire.php">Moștenire</a>
        <a class="left" href="/PHP/contacts.php">Contacts</a>
        <span class="them"> Theme:</span>
        <span class="col w" onclick="change('white')" ></span>
        <span class="col s" onclick="change('sepia')"></span>
        <span class="col b" onclick="change('black')"></span>


        <a class="left" href="/PHP/sign_in.php" style="width:auto;">Login</a>
        <a class="now left" href="/PHP/sign_up.php" style="width:auto;">Register</a>
    </div>
    <br>
    <br>
    <div class="content-area content-area-contacts">
        <div class="contact_us">

            <h1>Register</h1>

            <div class="form_container">
                <form action="sign-up-validation.php" id="form" method="post">
                    <input type="text" id="fname" name="fname" placeholder="Numele">
                    <br>
                    <br>
                    <p class="error_form" id="fname_error_message"></p>
                    <input type="text" id="sname" name="sname" placeholder="Prenumele">
                    <br>
                    <br>
                    <p class="error_form" id="sname_error_message"></p>
                    <input type="text" id="email" name="email" placeholder="Email">
                    <br>
                    <br>
                    <p class="error_form" id="email_error_message2"></p>
                    <input type="password" id="password" name="password" placeholder="Parola">
                    <br>
                    <br>
                    <p class="error_form" id="password_error_message"></p>
                    <input type="password" id="password2" name="password2" placeholder="Reintrodu parola">
                    <br>
                    <br>
                    <p class="error_form" id="password_error_message2"></p>
                    <input type="submit" id="submit" value="Send" name="submit">
                    <p id="validationText"></p>
                </form>
            </div>
        </div>
    </div>
    </div>
</header>
<script src="/JS/jquery.js"></script>
<script src="/JS/sign-up-validation.js"></script>
<script src="/JS/java.js"></script>
</body>
</html>