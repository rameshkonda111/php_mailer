<?php
/*
Author: Ramesh Konda
Date: 14-1-2015
*/
require_once('class.phpmailer.php');
$mail             = new PHPMailer();
//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);
$body = "Hai dude";
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "YOUR GMAIL";  // GMAIL username
$mail->Password   = "YOUR PASSWORD";            // GMAIL password

$mail->SetFrom('xyz@gmail.com', 'ramesh'); //if it is different from username also no issues

//$mail->AddReplyTo("rameshkonda111@gmail.com","ramesh");

$mail->Subject    = "Mail from XYZ";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional

$mail->MsgHTML($body);

$address = "toaddress@gmail.com";
$mail->AddAddress($address, "Ramesh Konda");

$mail->AddAttachment("C:/Users/k.ramesh1/Desktop/new.jpg");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: ";
} else {
  echo "Message sent!";
}
    
?>