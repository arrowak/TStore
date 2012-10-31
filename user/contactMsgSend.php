<?php 
$inputname = $_POST["inputname"];
$inputemail = $_POST["inputemail"];
$inputphone = $_POST["inputphone"];
$inputmessage = $_POST["inputmessage"];

$msg = "<b>Name : </b>" .$inputname ."\n"
		."<br><b>Email : </b>" .$inputemail . "\n"
		.'<br><b>Phone : </b>' .$inputphone ."\n"
		.'<br><b>Message : </b>' ."\n" .$inputmessage;
		
$subject = "TShirt Beku Contact Query";

$header = 'From: sender@gmail.com' . "\r\n" .
            'Reply-To: sender@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
$to = "arunko350@gmail.com";
$sendmail = mail($to,$subject,$msg,$header);
if($sendmail){
echo 'Mail sent. We will get back to you as soon as possible.';
}
else{
echo 'Error Sending the mail';
}
?>