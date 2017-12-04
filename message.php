<?php
require("connect.php");
require("login.php");
$recipients= $_POST['Recipients'];

// find all recipients separated by commas
if (isset($_POST['submit'])){
    if (empty($_POST['Recipients'])){
        echo ("All fields are required");
    }
    else{
        
        //rec array is list of all recipients, run sql query on Users table for all usernames in list and get all
        //recipients id's, then run another query 
        //with post variables to send to the messages database along with all recipient id's from previous query
        
        $RecipientArray = explode (',' , $_POST['Recipients']);//array of all recipients submitted from user 
        foreach ($RecipientArray as $Rec_Array){
        
            $query="SELECT id FROM Users WHERE username LIKE :username;";
            $statement = $conn->prepare($query);
            $statement->bindValue(':username',$Rec_Array,PDO::PARAM_STR);
            $statement->execute();
            
            foreach ($statement as $row) {
                $RecipientID=$row['id'];
            }
            session_start();
            $SendID=$_SESSION['id'];
            $Subject=$_POST['Subject'];
            $Body=$_POST['Body'];
            $DATESENT=date("Y/m/d");
            $message="INSERT INTO Messages(recipient_ids,sender_id,subject,body,date_sent) VALUES (:recid,:sendid,:subyy,:bodyy,:dsent);";
            $statement = $conn->prepare($message);
            $statement->bindValue(':recid',$RecipientID,PDO::PARAM_STR);
            $statement->bindValue(':sendid',$SendID,PDO::PARAM_STR);
            $statement->bindValue(':subyy',$Subject,PDO::PARAM_STR);
            $statement->bindValue(':bodyy',$Body,PDO::PARAM_STR);
            $statement->bindValue(':dsent',$DATESENT,PDO::PARAM_STR);
            $statement->execute();
        }
    
        
    }
    
}else{
    echo "EMPTY";
}

 
 
?>