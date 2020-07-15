<?php
	session_start();
	include 'header.login.php';
	include 'connect.php';
	include 'modal.style.php';

	if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
		$userIn =  $_SESSION['username'];
		$userEmail =  $_SESSION['email'];

		$output1 = "SELECT * FROM profile WHERE username = '$userIn'";
		$result1 = $con->query($output1) or die($con->error);

		$output2 = "SELECT * FROM user WHERE username = '$userIn'";
		$result2 = $con->query($output2) or die($con->error);
		

		while (($row = $result1->fetch_assoc()) && ($row2 = $result2->fetch_assoc())) {

			//data from user table
			$uname2 = $row2['username'];
			$pass2 = $row2['password'];
			$email2 = $row2['email'];
			$depart2 = $row2['department'];
			$gender2 = $row2['gender'];

			//data from profile table
			$uname = $row['username'];
			$fname = $row['firstname'];
			$lname = $row['lastname'];
			$matric = $row['matric'];
			$email = $row['email'];
			$phone = $row['phone'];
			$snetwork = $row['socialnet'];
			$address = $row['address'];
			$sog = $row['state'];
			$skill = $row['skill'];
			$sport = $row['sport'];
			$mstatus = $row['maritals'];
			$lspoken = $row['langspoken'];
			$fqoute = $row['favqoute'];

		echo "
			<div class='container'>
				<nav class='navbar navbar-default navbar-fixed-top'>
		            <div class='container-fluid'>
		            	<p></p>
		                <div class='btn-group btn-group-justified'>
						  	<a href='album-home.php' class='btn btn-success btn-md'><span class='glyphicon glyphicon-home'></span></a>
						  	<div class='btn-group'>
							    <button type='button' class='btn btn-success dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user '></span></button>
							    <ul class='dropdown-menu' role='menu'>
							      	<li><a href='album-update-profile.php?unames=$uname&fnames=$fname&lnames=$lname&matrics=$matric&emails=$email&phones=$phone&snetworks=$snetwork&addresss=$address&sogs=$sog&skills=$skill&sports=$sport&mstatuss=$mstatus&lspokens=$lspoken&fqoutes=$fqoute'>Update Info</a></li>
							      	<li><a href='album-update-user.php?unames=$uname2&passs=$pass2&emails=$email2&departs=$depart2&genders=$gender2'>Update Login</a></li>
							    </ul>
							</div>
							<a href='album-pages.php' class='btn btn-success btn-md'><span class='glyphicon glyphicon-file'></span></a>
							<a href='album-registered-user.php' class='btn btn-success btn-md'><span class='glyphicon glyphicon-list'></span></a>
						  	<div class='btn-group'>
	  							<form action='signout.php' method='POST'>
							    	<button type='submit' class='btn btn-success btn-md'><span class='glyphicon glyphicon-log-out'> </span></button>
								</form>
							</div>
						</div>
		            </div>
		        </nav>
        		<br><br><br>
					
			"
		;
			echo "<div class='row'>";

			echo "<div class='col-sm-3' style='border:3px solid none;'>";
			echo "</div>";

			echo "<div class='col-sm-6' style='border:3px solid none;'>";
			$dir = "images/".$userIn."/";
			$open = opendir($dir);
			while (($file = readdir($open)) != false) {
				if ($file != "." && $file != ".." && $file != "Thumbs.db") {

					echo"<img id='myImg' src='$dir/$file' alt='$fname' style='height:100%; width:100px; border-radius: 10%;'>
			            ";
				}
			}

			echo "<h4 style='text-align:center'>".$fname." ".$lname."</h4>";
			echo "<ul>";
			echo "<li><b>Matric: </b>".$matric."</li>";
			echo "<li><b>Email: </b><a href='mailto:".$email."'>".$email."</a></li>";
			echo "<li><b>Phone No: </b><a href='tel:".$phone."'>".$phone."</a></li>";
			echo "<li><b>Social network: </b>".$snetwork."</li>";
			echo "<li><b>Contact address: </b>".$address."</li>";
			echo "<li><b>State of origin: </b>".$sog."</li>";
			echo "<li><b>Skill(s): </b>".$skill."</li>";
			echo "<li><b>Sport: </b>".$sport."</li>";
			echo "<li><b>Marital status: </b>".$mstatus."</li>";
			echo "<li><b>Language spoken: </b>".$lspoken."</li>";
			echo "<li><b>Favorite qoute: </b><blockquote>".$fqoute."</blockquote></li>";
			echo "</ul>";
			echo "
			<!-- The Modal -->
	        <div id='myModal' class='modal'>
	            <span class='close'>&times;</span>
	            <img class='modal-content' id='img01'>
	            <div id='caption'></div>
	        </div>
			";
			echo "</div>";

			echo "<div class='col-sm-3' style='border:3px solid none;'>";
			echo "</div>";
			echo "</div>";
			include 'modal.script.php';
		}
		
	} else {
		echo "<h1>Wrong Username or Password</h1>";
		header("Location: index.html");
	}
?>