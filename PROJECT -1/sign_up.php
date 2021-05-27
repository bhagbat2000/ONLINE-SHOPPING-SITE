
<?php
if(empty($_POST['fristname']))
header("location:sign_up.html");
$fristname=$_POST['fristname'];
$lastname=$_POST['lastname'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$conn = mysqli_connect('localhost','root','','test');
$sql1="SELECT * FROM user WHERE mail = '$mail';";
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0)
{
    echo "try another mail id";
}
else
{
    $sql="insert into user values('$fristname','$lastname','$mail','$password');";
    $result=mysqli_query($conn,$sql);
    echo " <html>";
    echo "<head>";
    echo " <title> login from design</title>";
    echo "   <link rel='stylesheet' type='text/css' href='style.css'>";
    echo " <body>";
    echo " <div class='loginbox'>";
    echo "    <h1 style='color:red';>Login Succesfuly</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    echo " <a href='login.php'><h5 style='color:blue';>Back to login Page?</h5></a><br>";
    echo "	</div>";
    echo "</body> ";
    echo "</head>";
    echo "</html>";
}
//establish the connection betn php and mysql and execute the sql
//$result=mysqli_query($conn,$sql);

//$r=mysqli_num_rows($result);
?>
