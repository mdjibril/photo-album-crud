<?php
	session_start();
	include 'connect.php';

	$username = $_POST['username'];
	$password = $_POST['psw'];
	$passhash = md5($password);
		/*echo "$username";
		echo "$passhash";
		var_dump($_POST);*/
	$error = "Username or password Incorrect";

	$login = "SELECT * FROM user WHERE username = '$username' AND password = '$passhash'";

	$result = $con->query($login);

	if (!$row = $result->fetch_assoc()) {
		$_SESSION['error'] = $error;
		header("Location: index.php");
	}else{
		$_SESSION['username'] = $row['username'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['userId'] = $row['userId'];
		$_SESSION['profileId'] = $row['profileId']; 
		/*$user = $_SESSION['username'];
		echo "$user";
		echo "You are logged in";*/
		header("Location: album-home.php");
	}

?>