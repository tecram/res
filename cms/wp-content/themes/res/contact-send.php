<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
	require('../../../wp-blog-header.php');
	header("HTTP/1.1 200 OK");

	$nombre=$_POST["name"];
	$mail=$_POST["email"];
	$subject=utf8_decode($_POST["phone"]);
	$text=utf8_decode($_POST["message"]);

	$message="Email: ".$mail."<br /><br /> Mensaje: \r\n".$text;

	require "inc/PHPMailerAutoload.php";
	
	$mail=new PHPMailer();
	$mail->From="noreply@res.com.ar";
	$mail->FromName = 'Web RES';
	$mail->addAddress("donpiluso@yahoo.com.ar");  // Add a recipient
	$mail->Subject = $subject;
	$mail->isHTML();
	$mail->Body=$message;
	
	if($mail->send()){
		echo "1";
	}else{
		echo $mail->ErrorInfo;
	}
}
?>