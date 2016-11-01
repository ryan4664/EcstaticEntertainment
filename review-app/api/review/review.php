<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../slim/vendor/autoload.php';
require_once('../dbconfig.php');

$app = new \Slim\App();

$app->get('/approved', 'getApprovedReviews');
$app->get('/unapproved', 'getUnapprovedReviews');
$app->get('/all', 'getAllReviews');
$app->post('/approve', 'approveReview');
$app->post('/delete', 'deleteReview');
$app->post('/submit', 'submitReview');

$app->run();

function getApprovedReviews() {

	// Create connection
	$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

  // Check connection
	if ($conn->connect_error) {
		// If no connection throw an error
	    die("Connection failed: " . $conn->connect_error);
	}
  else {
		try {

    $query = "SELECT *
							FROM review
							WHERE status = 1";

		if($result = mysqli_query($conn, $query)) {

			$reviews = array();

			while($row = mysqli_fetch_array($result)) {
				$review = (object) ['review_id' => $row["review_id"], 'reviewed_by' => $row["reviewed_by"], 'description' => $row["description"], 'date' => $row["date"], 'status' => $row["status"]];
				array_push($reviews, $review);
			}

			echo json_encode($reviews);
		}
    else {
			echo("Error description: " . mysqli_error($conn));
		}
	} catch (Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
		mysqli_close($conn);
  }
}

function getUnapprovedReviews() {

	// Create connection
	$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

  // Check connection
	if ($conn->connect_error) {
		// If no connection throw an error
	    die("Connection failed: " . $conn->connect_error);
	}
  else {
		try {

    $query = "SELECT *
							FROM review
							WHERE status = 2";

		if($result = mysqli_query($conn, $query)) {

 			$reviews = array();

 			while($row = mysqli_fetch_array($result)) {
				$review = (object) ['review_id' => $row["review_id"], 'reviewed_by' => $row["reviewed_by"], 'email' => $row["email"], 'description' => $row["description"], 'date' => $row["date"], 'status' => $row["status"]];
				array_push($reviews, $review);
 			}

      echo json_encode($reviews);
    }
    else {
			echo("Error description: " . mysqli_error($conn));
		}
	} catch (Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
		mysqli_close($conn);
  }
}

function getAllReviews() {

	// Create connection
	$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

  // Check connection
	if ($conn->connect_error) {
		// If no connection throw an error
	    die("Connection failed: " . $conn->connect_error);
	}
  else {
		try {

    $query = "SELECT *
							FROM review";

		if($result = mysqli_query($conn, $query)) {

 			$reviews = array();

 			while($row = mysqli_fetch_array($result)) {
				$review = (object) ['review_id' => $row["review_id"], 'reviewed_by' => $row["reviewed_by"], 'email' => $row["email"], 'description' => $row["description"], 'date' => $row["date"], 'status' => $row["status"]];
				array_push($reviews, $review);
 			}

      echo json_encode($reviews);
    }
    else {
			echo("Error description: " . mysqli_error($conn));
		}
	} catch (Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
		mysqli_close($conn);
  }
}

function approveReview(Request $request) {

	// Create connection
	$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

	$postData = $request->getParsedBody();

	$review_id = filter_var($postData['review_id']);

	echo json_encode($review_id);

  // Check connection
	if ($conn->connect_error) {
		// If no connection throw an error
	    die("Connection failed: " . $conn->connect_error);
	}
  else {
		try {

	    $query = "UPDATE review
	    						SET status = 1
	  							WHERE review_id = '$review_id'";

		if(mysqli_query($conn, $query)) {
	   	$response_array['status'] = 'Review Approved';
	    echo json_encode($response_array);
	  }
	  else {
			echo("Error description: " . mysqli_error($conn));
		}
	} catch (Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
		mysqli_close($conn);
  }
}

function deleteReview(Request $request) {

	// Create connection
	$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

	$postData = $request->getParsedBody();

	$review_id = filter_var($postData['review_id']);

	echo json_encode($review_id);

  // Check connection
	if ($conn->connect_error) {
		// If no connection throw an error
	    die("Connection failed: " . $conn->connect_error);
	}
  else {
		try {

	    $query = "UPDATE review
	    						SET status = 3
	  							WHERE review_id = '$review_id'";

		if(mysqli_query($conn, $query)) {
	   	$response_array['status'] = 'Review Deleted';
	    echo json_encode($response_array);
	  }
	  else {
			echo("Error description: " . mysqli_error($conn));
		}
	} catch (Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
		mysqli_close($conn);
  }
}

function submitReview(Request $request) {

	// Create connection
	$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

	$postData = $request->getParsedBody();

	$name = filter_var($postData['name']);
	$email = filter_var($postData['email']);
	$description = filter_var($postData['description']);

  // Check connection
	if ($conn->connect_error) {
		// If no connection throw an error
	    die("Connection failed: " . $conn->connect_error);
	}
  else {
		try {

			$query = "INSERT INTO review
									(reviewed_by, description, email, status)
								VALUES
									('$name','$description', '$email', 2);";

		if(mysqli_query($conn, $query)) {
	   	$response_array['status'] = 'Review Submitted';
	    echo json_encode($response_array);
	  }
	  else {
			echo("Error description: " . mysqli_error($conn));
		}
	} catch (Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
		mysqli_close($conn);
  }
}

?>
