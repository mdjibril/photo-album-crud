<?php
	//index.php
	SESSION_START();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHOTO-ALBUM</title>

	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimal-ui' />

	<!--bootstrap-3.3.7-dist-->
	<link rel='stylesheet' href='lib/bootstrap/css/bootstrap.min.css'>

	<script src='lib/jquery/jquery-3.2.1.min.js'></script>
	<!--bootstrap-3.3.7-dist-->
	<script src='lib/bootstrap/js/bootstrap.min.js'></script>
	<style type='text/css'>
		.navbar-default{
	        background: #4caf50;
	    }

	    body {font-family: Arial, Helvetica, sans-serif;}
	</style>
</head>
<body>
	<div class='container'>
		<nav class='navbar navbar-default navbar-fixed-top'>
            <img src='img/logo.png' style='width: 80px; height: 80px; float: left;'>
            <div class='container-fluid'>
                <h5 style='text-align: center;color: whitesmoke;'><b>KADUNA STATE UNIVERSITY(KASU) DEPT. OF COMPUTER SCIENCE</b></h5>
                <h5 style='text-align: center;color: whitesmoke;'><b>KASU/15/CSC/**** Photo Album</b></h5>
            </div>
        </nav>
        <br><br><br><br><br><br>
		<div class='container'>
			<form class="form-horizontal" action="login.php" method="POST">
				<?php
				if(isset($_SESSION['error'])){
					$error = $_SESSION['error'];
					echo "<center><span style='color:red;'>$error</span></center>";
				}

				if(isset($_SESSION['success'])){
					$success = $_SESSION['success'];
					echo "<center><span style='color:#4caf50;'>$success</span></center>";
				}
				?>
			  	<div class="form-group">
			    	<label class="control-label col-sm-2" for="username">Username:</label>
			   		<div class="col-sm-10">
			      		<input type="text" class="form-control" name="username" placeholder="Enter username" required>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label class="control-label col-sm-2" for="psw">Password:</label>
			    	<div class="col-sm-10">
			      		<input type="password" class="form-control" name="psw" placeholder="Enter password" required>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<div class="col-sm-offset-2 col-sm-10">
			      		<button type="submit" class="btn btn-default">Submit</button>
			    	</div>
			  	</div>
			  	<div class="form-group">
			  		<div class="col-sm-offset-2 col-sm-10">
			    		<span class="psw">Dont Have an Account? <a href="signup-page.php">Signup</a></span><br>
			    		<span class="psw">Forgot <a href="#">password?</a></span>
			    	</div>
			  	</div>
			</form>
		</div>
		<nav class='navbar navbar-default navbar-fixed-bottom'>
            <div class='container'>
                <p style='text-align: center;color: whitesmoke;'>Copyright &copy; 2019 CSC</p>
            </div>
        </nav>
	</div>
</body>
</html>
<?php
	unset($_SESSION['error']);
	unset($_SESSION['success']);
?>