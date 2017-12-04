<?php
require("login.php");
session_start();
if ( $_SESSION['username'] != 'admin') {// if the admin is not in the currect session, redirect to regular home screen
	header("location:composemessage.php");
} 
?>

<!DOCTYPE html>
<html>
    

<head>
    <title>
        Cheapo Mail
    </title>
    <link rel="stylesheet" href="newuser.css" type="text/css">
    <script type="text/javascript" src="validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="icom" href="cheapo Mail.png">
</head>

<body>
    <div>
        <img class="logo" src="cheapo Mail.png" alt="Mail icon">
    </div>
    <div class="headerField">
        <span id="signin-button">
         <a id = "link-signin" href="login.html" >Sign In</a>
        </span>
    </div>
    <h1>Create new CheapoMail Account</h1>
    <div class="signup">
        <form id="newuserInfo" action="process.php" onsubmit = "return validateNew()" method="post">
            <fieldset id="fieldset">
                <legend>Signup Form</legend>
                <strong>First Name</strong>
                <input id="firstName" type="text" name="firstName" placeholder="eg.John" class="textfield" required>
                <strong>Last Name</strong>
                <input id="lastName" type="text" name="lastName" placeholder="eg.Brown" class="textfield" required>
                <strong>Choose your username</strong>
                <input id="userName" type="text" name="userName" class="textfield" required>
                <strong>Create a password</strong>
                <input id="password" type="password" name="password" class="textfield" required>
                <strong>Confirm your password</strong>
                <input id="passwordCon" type="password" name="passwordCon" class="textfield" required>
                <br><br>
                <input id="submit" type="submit" value="Submit" class="button">
                <input id="cancel" type="submit" value="Cancel" class="button">
            </fieldset>
        </form>
    </div>
    <div>

    </div>
</body>
</html>

