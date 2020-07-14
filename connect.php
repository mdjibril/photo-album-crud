<?php 
$con = mysqli_connect("localhost", "root", "", "newphoto");

if (!$con) {
	die("Connection failed: " .mysqli_connect_error());
}

?>