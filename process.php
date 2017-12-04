<?php

include("validate.php");
require("connect.php");

$f_name = $_POST["firstName"];
$l_name = $_POST["lastName"];
$user_name = $_POST["userName"];
$last_loginIn = date("Y-m-d h:i:sa");
$admin = $_POST["admin"];
$password = $_POST["password"];
$hash = password_hash($password, PASSWORD_DEFAULT);



echo $hash;

if(isset($_POST['admin'])){
    $admin == 'Yes';
};

$sql = $conn->prepare("INSERT INTO Users (firstname,lastname,username,password)
VALUES(:f_name,:l_name,:user_name,:hash);");
$sql->bindParam(':f_name', $f_name, PDO::PARAM_STR);
$sql->bindParam(':l_name', $l_name, PDO::PARAM_STR);
$sql->bindParam(':user_name', $user_name, PDO::PARAM_STR);
$sql->bindParam(':hash', $hash, PDO::PARAM_STR);
$sql->execute();

header("location:newuser.php");


// if (isset($_POST['admin'])) {
// $stmt = $conn -> prepare('SELECT * FROM users');
// $stmt -> execute();
// $users = $stmt -> fetchAll();


// foreach ($users as $user){
//     echo '<br>' .$user['first_name']. '-' . $user['last_name']. '-' . $user['user_name']. '-' . $user['email']. '-'. $user['password_digest']. '-' . $user['certificateId']. '-'. $user['isAdmin']. '-' . $user['salt'] . '<br>';
// }
// }else 
// echo '<br>'. 'NOT AN ADMIN'. '<br>';



?>