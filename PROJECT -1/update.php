<?php
session_start();
if (empty($_SESSION['counter']) and empty($_SESSION['username'])) {
  header("location:admin_login.php");
} else {

$Price=$_POST['Price'];
$Qty=$_POST['Qty'];
$varity_Name=$_POST['varity_Name'];
$conn=mysqli_connect('localhost','root','','test');
$sql="UPDATE furniture SET price = '$Price',qty = '$Qty' where varieties_name = '$varity_Name';";
//establish the connection betn amd mysql and execute the sql
$result=mysqli_query($conn, $sql);


    echo "update succsefuly";
}
?>