<?php
session_start();
if (empty($_SESSION['counter']) and empty($_SESSION['username'])) {
  header("location:admin_login.php");
} else {
if (isset($_POST['varity_Name']) && !empty($_POST['varity_Name'])) {
    $varity_Name = $_POST['varity_Name'];
}
else{$varity_Name=NULL;}
if (isset($_POST['variety']) && !empty($_POST['variety'])) {
    $variety = $_POST['variety'];
}else{$variety=NULL;}
if (isset($_POST['Slide']) && !empty($_POST['Slide'])) {
    $Slide = $_POST['Slide'];
}else{$Slide=NULL;}
$Sid = $_POST['Sid'];
$Price = $_POST['Price'];
$catogory = $_POST['catogory'];
$type = $_POST['Type'];
$Type_Name = $_POST['Type_Name'];
$Catogory_Name = $_POST['Catogory_Name'];
$qty=$_POST['Qty'];
$file_name = $_FILES['upload']['name'];
$file_tmp = $_FILES['upload']['tmp_name'];
$conn=mysqli_connect('localhost','root','','test');
$sql="select * from furniture where category_name = '$Catogory_Name' and type_name = '$Type_Name';";
//establish the connection betn amd mysql and execute the sql
$result=mysqli_query($conn, $sql);
$sql1="insert into furniture values('$Sid',$Price,'$catogory','$type','$variety','$Slide','$varity_Name','$Type_Name','$Catogory_Name')";
mysqli_query($conn, $sql1);
$type=0;
$cnt=0;
if(mysqli_num_rows($result)>0)
{
  echo "<div class='row'>";
  while($row = mysqli_fetch_assoc($result))
  {
   $type=$row["category"];
   
  }
}
$type++;
move_uploaded_file($file_tmp, "image/all/" . $type . ".jpg");
echo "success";
}
?>
