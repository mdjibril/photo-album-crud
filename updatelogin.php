<?php
	session_start();
	include 'connect.php';

	$loggedId1 = $_SESSION['userId'];
	$loggedId2 = $_SESSION['username']; 

	$mypic = $_FILES['newupload']['name'];
	$temp = $_FILES['newupload']['tmp_name'];
	$type = $_FILES['newupload']['type'];

	$username = $_REQUEST['username'];
	$newpsw = $_REQUEST['newpsw'];
	$newpswHash = md5($newpsw);
	$newemail = $_REQUEST['newemail'];
	$department = $_REQUEST['department'];
	$newgender = $_REQUEST['newgender'];

	/*$update = mysqli_num_rows(mysqli_query($con, "SELECT * FROM user WHERE email = '$newemail'"));
    if($update == 0){*/

		if(($type == 'image/jpeg') || ($type == 'image/jpg') || ($type == 'image/png')){
			$updateData1 = "UPDATE `user` SET `password` = '$newpswHash', `email` = '$newemail', `gender` = '$newgender' WHERE `user`.`userId` = '$loggedId1'";
			$updateData2 = "UPDATE `profile` SET `email` = '$newemail' WHERE `profile`.`username` = '$loggedId2'";

			$directory = "./images/".$_SESSION['username'];
	    	$files = 0;
	    	$handle = opendir($directory);
	    	while (($file = readdir($handle)) != FALSE) {
	    		if ($file != "." && $file != ".." && $file != "Thumbs.db") {
	    			if(unlink(realpath($directory."/$file"))){
	    				$files++;
	    				echo "image Success delete";
	    			}else{
	    				echo "image Fail delete";
	    			}
				}
	    	}
	    	closedir($handle);
	    	sleep(1);
	    	move_uploaded_file($temp, "images/".$_SESSION['username']."/$mypic");
			$insert1 = mysqli_query($con, $updateData1);
			$insert2 = mysqli_query($con, $updateData2);

		    if($insert1 && $insert2){
		    	header("Location: album-profile.php");
		    	// echo "<h1>success Insert</h1>";
		    } else{
		        echo "<h1>error Insert</h1>";
		    }
		}else{
			echo "Not am Image";
		}
	/*}else if($update != 0){
        $_SESSION['error'] = "User already exist, try different username or email";
        header("Location: album-update-user.php");
    }*/
?>