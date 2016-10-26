<?php

	$subject	= "An event request from your Website!";

	$recipient = "ryan@rdonohue.ca,EcstaticEntertainment@outlook.com";

	$eventType = $_POST['type'];
	$fullname = $_POST['fullName'];
	$email = $_POST['emailAddress'];
	$ceromonies = $_POST['cer'];
	$ceremoniesDiffLoc = $_POST['cerDiffLoc'];
	$videoPres = $_POST['video'];
	$uplightingNumber = $_POST['uplight'];
	$total = $_POST['quotedTotal'];

	$mail_body	= "From: " . $fullname . "\r\n";
	$mail_body	.= "Contact: " . $email . "\r\n";
	$mail_body	.= "Type: " . $eventType . "\r\n"."\r\n";

	$mail_body	.= "Ceremony: " . $ceromonies . "\r\n";
	$mail_body	.= "Ceremony different location: " . $ceremoniesDiffLoc . "\r\n";
	$mail_body	.= "Video presantation: " . $videoPres . "\r\n";
	$mail_body	.= "Uplights: " . $uplightingNumber . "\r\n";

	$headers = "From: " . $emailTest;
	$headers .= "Reply-To: ". $email;
	$headers .= "MIME-Version: 1.0";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1";
	$headers = "MIME-Version: 1.0\n" ;
	$headers .= "Sensitivity: Personal";
	$headers .= 'X-Mailer: PHP/' . phpversion();

    //if(isset($_POST["name"])){

    //cannot use while in WAMP

    mail($recipient, $subject, $mail_body, $headers) or die("Error!");

    //}

?>
