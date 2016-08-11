<?php


	$subject	= "An email from your Website!";

	$recipient = "RYAN@rdonohue.ca,EcstaticEntertainment@outlook.com,forward@ecstaticentertainmentdjs.com,Nathan-murray15@hotmail.com ";

	$full_name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
	$email 		= filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$message 	= filter_var($_POST["message"]);
	$emailTest = 'forward@ecstaticentertainmentdjs.com';

	$mail_body	= '<html><body>';
	$mail_body	.= "<h3>From: " . $full_name . "</h3>";
	$mail_body	.= "<h3>Contact: " . $email . "</h3>";
	$mail_body	.= $message;
	$mail_body	.= '</body></html>';

	$headers = "From: " . $emailTest;
	$headers .= "Reply-To: ". $email;
	$headers .= "MIME-Version: 1.0";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1";
	$headers = "MIME-Version: 1.0\n" ;
	$headers .= "Sensitivity: Personal";
	$headers .= 'X-Mailer: PHP/' . phpversion();

    if(isset($_POST["name"])){

    //cannot use while in WAMP

    mail($recipient, $subject, $mail_body, $headers) or die("Error!");

    }

?>