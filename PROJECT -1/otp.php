
<?php
session_start();
$otp=$_SESSION['otp'];
$email=$_SESSION['email'];
$user_otp=$_POST['user_otp'];
if($user_otp == $otp)
{ 
	header("location:set_new_password.html");
	}
	else
	{
		echo " <html>";
		echo "<head>";
		echo " <title> login from design</title>";
		echo "   <link rel='stylesheet' type='text/css' href='style.css'>";
		echo " <body>";
		echo " <div class='loginbox'>";
		echo "    <h1 style='color:red';>Wrong Password</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
		echo " <a href='forgot.html'><h5 style='color:blue';>Back to frogot Page?</h5></a><br>";
		echo "	</div>";
		echo "</body> ";
		echo "</head>";
		echo "</html>";
	}
	?>