<?php 
$inputname = $_POST["inputname"];
$inputemail = $_POST["inputemail"];
$inputphone = $_POST["inputphone"];
$inputmessage = $_POST["inputmessage"];

$msg = 'Name : ' .$inputname ."\n"
		.'Email : ' .$inputemail . "\n"
		.'Phone : ' .$inputphone ."\n"
		.'Message : ' ."\n" .$inputmessage;
		
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
mail('arunko350@gmail.com','tBeku Contact Form', $msg,$headers);
echo 'Mail sent. We will get back to you as soon as possible.';
?>