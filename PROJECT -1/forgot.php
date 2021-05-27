
         
			<?php
			$email=$_POST['Email'];
             $conn=mysqli_connect('127.0.0.1','root','','test');
			 $sql="select * from user where mail = '$email';";
			 //establish the connection betn amd mysql and execute the sql
			 $result=mysqli_query($conn, $sql);
			 $r=mysqli_num_rows($result);
			 if($r>0)
			 {
				$email=$_POST['Email'];
				require 'phpmailer/PHPMailerAutoload.php';
				$mail = new PHPMailer();
				$mail->isSMTP();
				  $mail->Host = "smtp.gmail.com";
				  $mail->SMTPSecure = "ssl";
				  $mail->Port = 465;
					$mail->SMTPAuth = true;
				  $mail->Username = "gudubhagbat9012@gmail.com";
				  $mail->Password = "9124694933";
				  $mail->setFrom('gudubhagbat9012@gmail.com','Furniture');
					$mail->addAddress($email);
				  $mail->isHTML(true);
				  $otp=rand(1000,10000);
			         $mail->Subject = 'OTP';
					 $mail->Body = "<h1>".$otp."</h1>";
					 session_start();
					 $_SESSION['otp']=$otp;
					 $_SESSION['email']=$email;
			//$mail->addAttachment('fbcover.jpg', 'cover');
			if ($mail->send())
         {
			header("location:otp1.php");
			
			
         	}		
		 else
		 {
			 echo"try again";
		 }
}         
			 else 
			 {
                echo " <html>";
                echo "<head>";
                 echo " <title> login from design</title>";
               echo "   <link rel='stylesheet' type='text/css' href='style.css'>";
               echo " <body>";
                 echo " <div class='loginbox'>";
                  echo "    <h1 style='color:red';>Invalid Email ID</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
                 echo " <a href='forgot.php'><h5 style='color:blue';>Back to login Page?</h5></a><br>";
                   echo "	</div>";
                  echo "</body> ";
                  echo "</head>";
                     echo "</html>";


			 }
			?>
