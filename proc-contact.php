<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];




$to = 'helpdesk@walcourier.com';
$subject = 'Contact Details from website';
$mailcontent  = 'Name =  '.$name."\n"
				.'Tel =  '.$phone."\n"
				.'Email =  '.$email."\n"
				.'Tel =  '.$subject."\n"
				.'Message =  '.$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
// More headers
$headers .= "From: <helpdesk@walcourier.com>" . "\r\n";

mail($to, $subject, $mailcontent, $headers);
 
$section = '<font color="#FF0000">Message Sent Successfully</font>';
	include('contact-us2.html');	
	exit;
?>