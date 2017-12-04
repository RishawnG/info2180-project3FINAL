<?php

// $salt = (string) mt_rand();
// $rand = $password.$salt;
// $hash = md5($rand);
// $f_name = $_POST["firstName"];
// $l_name = $_POST["lastName"];
// $u_name = $_POST["userName"];
// $password = $_POST["password"];
// $passwordCon = $_POST["passwordCon"];

$f_name = $l_name = $u_name = $password = $passwordCon = "";
$f_nameErr = $l_nameErr = $u_nameErr = $passErr = $passconErr ="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
     if(empty($_POST["firstName"])){
        $fnameErr = "First Name is required";
    }else{
        $f_name = test_input($_POST["firstName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$firstName)){
            $fnameErr = "Only letters and White spaces are allowed";
        }
    }
if(empty($_POST["lastName"])){
        $lnameErr = "Last Name is required";
    }else{
        $l_name = test_input($_POST["lastName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lastname)){
            $lnameErr = "Only letters and White spaces are allowed";
        }
    } 
if(empty($_POST["userName"])){
        $u_nameErr = "User Name is required";
    }else{
        $u_name = test_input($_POST["userName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$userName)){
            $u_nameErr = "Only letters and White spaces are allowed";
        }
    }
/*check if field is empty and if the field is not empty check if it matches the Regex pattern*/
if(empty($_POST["password"])){
        $passErr = "Password is required";
    }else{
        $password= test_input($_POST["password"]);
     
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/",$password)){
            $passErr = "Password does match specified criteria";
        }
 }
if ($_POST["password"] != $_POST["passwordCon"]){//to test if the passwords match
    $passcErr = "Passwords Dont match";
}
    
}


function test_input($data) {//test the user data 
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>