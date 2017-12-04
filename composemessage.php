<?php 
require("login.php");
session_start();
if ($_SESSION['username'] == 'admin') {
	header("location:newuser.php");
}else{
   
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>CheapoMail Home</title>
    <script type="text/javascript" src="validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <div class="login">
        <form class="LoginInfo" action="message.php" method="POST">
            <fieldset id="fieldset">
                <p><strong>Recipients</strong></p>
                <input id="recipients" type="text" name="Recipients" required="required" />
                <p><strong>Subject</strong></p>
                <input type="text" name="Subject" required="required" />
                <p><strong>Body</strong></p>
                <!--<textarea id= msgbody name="Body"></textarea>-->
                <input type="text" name="Body" required="required" /><br/>
                <!--<input id='submit' type="submit" name = "Submit" value="Submit" />-->
                <button type="Submit" id="submit" name="submit">Send Message</button>
                
                <!--<a href="logout.php">Logout</a>-->
            </fieldset >
        </form>
        <a href="login.html"><button id="logout" >Logout</button></a>
        
    </div>
</body>

</html>

