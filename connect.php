<?php

 $Username = $_POST['Username'];
 $Email = $_POST['Email'];
 $Password = $_POST['Password'];

 //database connection

 $conn = new mysqli('localhost','root','','user_registration');

 if($conn->connect_error){
     die('Connection Failed :' .$conn->connect_error);
 }

 else{
     $stmt = $conn->prepare("insert into user_reg(userName, email, password)
        values(?, ?, ?)");

     $stmt->bind_param("sss",$Username,$Email,$Password);
     $stmt->execute();
     echo "Registration Successful !!";   
     $stmt->close();
     $conn->close();
 }

?>

<p>Go to <a href="index.html">Home</a> Page </p>