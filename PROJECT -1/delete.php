<?php
session_start();
if (empty($_SESSION['counter']) and empty($_SESSION['username'])) {
  header("location:admin_login.php");
} else {
$varity_Name=$_POST['varity_Name'];

 
$conn=mysqli_connect('localhost','root','','test');
$sql="delete from furniture where varieties_name='$varity_Name';";
//establish the connection betn amd mysql and execute the sql
$result=mysqli_query($conn, $sql);


    echo "delete succsefuly";
}
?>