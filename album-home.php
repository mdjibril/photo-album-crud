<?php
	session_start();
	include 'header.login.php';
	if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
		$userIn =  $_SESSION['username'];
		$userEmail =  $_SESSION['email'];
		echo "
			<div class='container-fluid'>
				<nav class='navbar navbar-default navbar-fixed-top'>
		            <div class='container'>
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
        		<div class='container'>
					<h3 style='text-align:center'>Welcome to CSC-15 Mobile Web Photo Album</h3>
					<h3 style='text-align:center'>$userIn</h3>
					<img src='img/logo.png' style='width:100%; height:100%; margin: 0 auto;'>
				</div>
			</div>
		";
	} else {
		echo "<h1>Wrong Username or Password</h1>";
    	header("Location: index.html");
	}
?>