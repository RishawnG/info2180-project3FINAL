<?php
    include("connect.php");

    $my_db = "schema";

    $conn_db = mysqli_connect($servername, $username,$password, $my_db);

    // Check connection
    if(mysqli_connect_errno()){
        echo "Failed to connect to MYSQL: " . mysqli_connect_error();
    }

?>