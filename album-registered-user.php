<?php  
	session_start();
	include 'connect.php';
	include 'header.login.php';
	include 'modal.style.php';

	if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
		
		$userIn =  $_SESSION['username'];
		$userEmail =  $_SESSION['email'];

		$output1 = "SELECT * FROM profile";
		$result1 = $con->query($output1) or die($con->error);
		echo "
				<div class='container'>
					<nav class='navbar navbar-default navbar-fixed-top'>
			            <div class='container-fluid'>
			            	<p></p>
			                <div class='btn-group btn-group-justified'>
							  	<a href='album-home.php' class='btn btn-success'><span class='glyphicon glyphicon-home'></span></a>
				                <a href='album-profile.php' class='btn btn-success'><span class='glyphicon glyphicon-user'></span></a>
				                <a href='album-pages.php' class='btn btn-success'><span class='glyphicon glyphicon-file'></span></a>
				                <a href='album-registered-user.php' class='btn btn-success'><span class='glyphicon glyphicon-list'></span></a>
							  	<div class='btn-group'>
		  							<form action='signout.php' method='POST'>
								    	<button type='submit' class='btn btn-success btn-md'><span class='glyphicon glyphicon-log-out'> </span></button>
									</form>
								</div>
							</div>
			            </div>
			        </nav>
	        		<br><br><br>	
			";
		echo "<ol class='1'>";
		while ($row = $result1->fetch_assoc()) {

			$uname = $row['username'];
			$fname = $row['firstname'];
			$lname = $row['lastname'];

			echo "<li><a class='list' href='album-paginate.php#".$uname."'>".$fname." ".$lname."</a></li>";
		}
			echo "</ul>";
			echo "</div>";
		
	} else {
		echo "<h1>Wrong Username or Password</h1>";
		header("Location: index.html");
	}
?>