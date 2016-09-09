<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../slim/vendor/autoload.php';
require_once('../dbconfig.php');

$app = new \Slim\App();

$app->post('/login', 'loginUser');

$app->run();

// function loginUser(Request $request)
function loginUser() {

	$response_array['status'] = 'Getting here';
  echo json_encode($response_array);

	// // Create connection
	// $conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
	//
  // // Check connection
	// if ($conn->connect_error) {
	// 	// If no connection throw an error
	//     die("Connection failed: " . $conn->connect_error);
	// }
  // else {
  //   $postData = $request->getParsedBody();
	//
  //   $email = filter_var($postData['email'], FILTER_SANITIZE_EMAIL);
  //   $password = filter_var($postData['password'], FILTER_SANITIZE_STRING);
	//
	//
	// 	try {
	//
  //   $query = "SELECT alias, first_name, last_name
	// 						FROM users
	// 						WHERE email = '$email'
	// 						AND password = '$password'";
	//
	// 	$result = mysqli_query($conn, $query);
	//
	// 	echo json_encode($result->num_rows);
	//
  //   if($result->num_rows == 1) {
  //    $response_array['status'] = 'User Found';
  //     echo json_encode($response_array);
  //   }
  //   else {
	// 		echo("Error description: " . mysqli_error($conn));
	// 	}
	// } catch (Exception $e) {
	// 	echo 'Caught exception: ',  $e->getMessage(), "\n";
	// }
	//
	// 	mysqli_close($conn);
  // }
}

?>
