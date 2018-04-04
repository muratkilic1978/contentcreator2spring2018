<?php
include 'includes/connectdb.php';

//Check if form submitted

 

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$user = strip_tags($user);
	$message = mysqli_real_escape_string($con, $_POST['message']);
	$message = strip_tags($message);

	//Set timezone
	date_default_timezone_set('Europe/Copenhagen');
	$time = date('G:i:s',time());

	//Validate input
	if( (empty($user)) || (empty($message)) ) {
		$error = 'Please fill in your name and a message';
		header("Location: index.php?error=".urlencode($error));
		exit();
	} else {
		$query = "INSERT INTO shouts (user, message, time) VALUES ('$user', '$message', '$time')";
		
		if(!mysqli_query($con, $query)) {
			die('Error: '.mysqli_connect_error($con));
		} else {
			header("Location: index.php");
			exit();
		}
	}
}

?>