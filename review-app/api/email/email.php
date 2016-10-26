<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../slim/vendor/autoload.php';
require_once('../dbconfig.php');

$app = new \Slim\App();

$app->post('/contact', 'sendContactMail');
$app->post('/wedding', 'sendWeddingMail');
$app->post('/staff', 'sendStaffMail');

$app->run();

function sendContactMail(Request $request) {

	$postData = $request->getParsedBody();

	$subject	= "An email from your Website!";

	$recipient = "ryan@rdonohue.ca,EcstaticEntertainment@outlook.com,Nathan-murray15@hotmail.com ";

	$name = filter_var($postData['name'], FILTER_SANITIZE_STRING);
	$email = filter_var($postData['email'], FILTER_SANITIZE_EMAIL);
	$message = filter_var($postData['message'], FILTER_SANITIZE_STRING);

	$mail_body	= "From: " . $name . "\r\n";
	$mail_body	.= "Contact: " . $email . "\r\n";
	$mail_body	.= "Message: " . $message . "\r\n"."\r\n";

	$headers = "From: " . $recipient;
	$headers .= "Reply-To: ". $email;
	$headers .= "MIME-Version: 1.0";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1";
	$headers = "MIME-Version: 1.0\n" ;
	$headers .= "Sensitivity: Personal";
	$headers .= 'X-Mailer: PHP/' . phpversion();


	mail($recipient, $subject, $mail_body, $headers) or die("Error!");

}

function sendWeddingMail(Request $request) {

	$postData = $request->getParsedBody();

	$subject	= "An email from your Website!";

	// $recipient = "ryan@rdonohue.ca,EcstaticEntertainment@outlook.com,Nathan-murray15@hotmail.com ";
	$recipient = "ryan@rdonohue.ca";

	$name = filter_var($postData['name'], FILTER_SANITIZE_STRING);
	$email = filter_var($postData['email'], FILTER_SANITIZE_EMAIL);
	$message = filter_var($postData['message'], FILTER_SANITIZE_STRING);
	$sameLocation = filter_var($postData['sameLocation'], FILTER_SANITIZE_STRING);
	$videoPres = filter_var($postData['videoPres'], FILTER_SANITIZE_EMAIL);
	$uplightingNumber = filter_var($postData['uplightingNumber'], FILTER_SANITIZE_STRING);

	$mail_body	= "From: " . $name . "\r\n";
	$mail_body	.= "Contact: " . $email . "\r\n";
	$mail_body	.= "Type: Wedding" . "\r\n"."\r\n";

	$mail_body	.= "Ceremony different location: " . $sameLocation . "\r\n";
	$mail_body	.= "Video presantation: " . $videoPres . "\r\n";
	$mail_body	.= "Uplights: " . $uplightingNumber . "\r\n";

	$headers = "From: " . $recipient;
	$headers .= "Reply-To: ". $email;
	$headers .= "MIME-Version: 1.0";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1";
	$headers = "MIME-Version: 1.0\n" ;
	$headers .= "Sensitivity: Personal";
	$headers .= 'X-Mailer: PHP/' . phpversion();


	mail($recipient, $subject, $mail_body, $headers) or die("Error!");

}

function sendStaffMail(Request $request) {

	$postData = $request->getParsedBody();

	$subject	= "An email from your Website!";

	// $recipient = "ryan@rdonohue.ca,EcstaticEntertainment@outlook.com,Nathan-murray15@hotmail.com ";
	$recipient = "ryan@rdonohue.ca";

	$name = filter_var($postData['name'], FILTER_SANITIZE_STRING);
	$email = filter_var($postData['email'], FILTER_SANITIZE_EMAIL);
	$message = filter_var($postData['message'], FILTER_SANITIZE_STRING);
	$videoPres = filter_var($postData['videoPres'], FILTER_SANITIZE_EMAIL);
	$uplightingNumber = filter_var($postData['uplightingNumber'], FILTER_SANITIZE_STRING);

	$mail_body	= "From: " . $name . "\r\n";
	$mail_body	.= "Contact: " . $email . "\r\n";
	$mail_body	.= "Type: Staff Party" . "\r\n"."\r\n";

	$mail_body	.= "Video presantation: " . $videoPres . "\r\n";
	$mail_body	.= "Uplights: " . $uplightingNumber . "\r\n";

	$headers = "From: " . $recipient;
	$headers .= "Reply-To: ". $email;
	$headers .= "MIME-Version: 1.0";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1";
	$headers = "MIME-Version: 1.0\n" ;
	$headers .= "Sensitivity: Personal";
	$headers .= 'X-Mailer: PHP/' . phpversion();


	mail($recipient, $subject, $mail_body, $headers) or die("Error!");

}

?>
