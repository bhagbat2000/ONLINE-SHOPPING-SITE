<?php
session_start();
$password=$_POST['password'];
$email=$_SESSION['email'];
 
$conn=mysqli_connect('localhost','root','','test');
$sql="UPDATE user SET password = '$password' where mail = '$email';";
//establish the connection betn amd mysql and execute the sql
$result=mysqli_query($conn, $sql);


    echo "update succsefuly";

?>