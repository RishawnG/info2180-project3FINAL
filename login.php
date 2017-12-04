<?php

require("connect.php");

$User=$_POST['username'];//escape and sanitize inputs here 
$Passuser=$_POST['password'];
$Pass=$Passuser;


if(isset($_POST['submit'])){
    if (empty($_POST["username"]) or empty($_POST["password"])){
        echo ("All fields are required");
    }
    else{
        $query="SELECT * FROM Users WHERE username LIKE :username";
        $statement = $conn->prepare($query);
        $statement->bindValue(':username',$User,PDO::PARAM_STR);
        $statement->execute();
    
    $count = $statement->rowCount();
    if($count > 0){
        session_start();
        foreach ($statement as $row) {
                $PASS=$row['password'];
                $ID=$row['id'];
            }
        if(password_verify($Passuser, $PASS)) {
            $_SESSION ['username'] = $User;
            $_SESSION['id']=$ID;
            header("location:composemessage.php");
    }
    else {
       echo "</br>Incorrect password, or user does not exist";
       echo "</br><a href='login.html'> Return to login</a>";// index html
    }
    
    }
    
    
}
}
?>

