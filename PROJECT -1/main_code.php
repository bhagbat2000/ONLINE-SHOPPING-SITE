<?php
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'usrid';
$mail->Password = 'pass';
$mail->setFrom('userid', 'USername');

//reciever email
$mail->addAddress('avinashvidyarthi@gmail.com');
$mail->addAddress('avinashvidyarthi@yahoo.com');

$otp=rand(1000,9999);
$_SESSION['otp']=$otp;
$mail->isHTML(true);
$mail->Subject = 'SMTP email test';
$mail->Body = "this is some bodyO<br>TP: $otp<br> <img src='data/love.jpg'> ";
//$mail->addAttachment('fbcover.jpg', 'cover');
if ($mail->send())
    echo "Mail sent";
else
	echo "not sent";


/*if($_SESSION['otp']==$_POST['otp'])
	echo "true";*/


?>