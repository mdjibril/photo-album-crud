<?php
	session_start();
	include 'connect.php';

	$username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $newfname = $_REQUEST['newfname'];
	$newlname = $_REQUEST['newlname'];
	$newmatric = $_REQUEST['newmatric'];
	$newphone = $_REQUEST['newphone'];
	$newsnetwork = $_REQUEST['newsnetwork'];
	$newaddress = $_REQUEST['newaddress'];
	$newstate = $_REQUEST['newstate'];
	$newskill = $_REQUEST['newskill'];
	$newsport = $_REQUEST['newsport'];
	$newmstatus = $_REQUEST['newmstatus'];
	$newlspoken = $_REQUEST['newlspoken'];
	$newfqoute = $_REQUEST['newfqoute'];

	$updateData = "UPDATE `profile` SET `firstname` = '$newfname', `lastname` = '$newlname', `matric` = '$newmatric', `phone` = '$newphone', `socialnet` = '$newsnetwork', `address` = '$newaddress', `state` = '$newstate', `skill` = '$newskill', `sport` = '$newsport', `maritals` = '$newmstatus', `langspoken` = '$newlspoken', `favqoute` = '$newfqoute' WHERE `profile`.`email` = '$email'";

	$insert = mysqli_query($con, $updateData);

    if($insert){
    	header("Location: album-profile.php");	
        echo "<h1>Success</h1>";
    } else{
        echo "<h1>error</h1>";
    }

?>