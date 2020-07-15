<?php
	SESSION_START();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHOTO-ALBUM</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimal-ui" />

	<!--bootstrap-3.3.7-dist-->
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">

	<script src="lib/jquery/jquery-3.2.1.min.js"></script>
	<!--bootstrap-3.3.7-dist-->
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
		.navbar-default{
	        background: #4caf50;
	    }

	    body {font-family: Arial, Helvetica, sans-serif;}
	</style>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <h5 style="text-align: center;color: whitesmoke;"><b>KADUNA STATE UNIVERSITY(KASU) DEPT. OF COMPUTER SCIENCE</b></h4>
                <h5 style="text-align: center;color: whitesmoke;"><b>KASU/15/CSC/**** Photo Album</b></h5>
            </div>
        </nav>
        <br><br><br><br>
		<div class="container">
			<form class="form-horizontal" action="signup.php" method="POST" enctype='multipart/form-data'>
				<?php
				if(isset($_SESSION['error'])){
					$error = $_SESSION['error'];
					echo "<center><span style='color:red'>$error</span></center>";
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
			    	<label class="control-label col-sm-2" for="email">Email:</label>
			   		<div class="col-sm-10">
			      		<input type="email" class="form-control" name="email" placeholder="Enter email">
			    	</div>
			  	</div>
			  	<div class="form-group">	
			    	<label class="control-label col-sm-2" for="department">Department:</label>
			   		<div class="col-sm-10">
					 	<select class="form-control" name="department">
					    	<option>Computer Science</option>
					  	</select>
			    	</div>
			  	</div>
			  	<div class="form-group">
			      	<label class="control-label col-sm-2" for="gender">Gender</label>
			    	<div class="col-sm-10">
      					<input type="radio" name="gender" value="Male" checked>Male
      					<input type="radio" name="gender" value="Female">Female
			    	</div>
			  	</div>
			  	<div class='form-group'>
					<label class='control-label col-sm-2' for='profilepic'>Album Picture:</label>
			    	<div class='col-sm-10'>
					   	<input type='file' class='form-control' name='upload'>
					</div>
				</div>
			  	<div class="form-group">
			    	<div class="col-sm-offset-2 col-sm-10">
			      		<button type="submit" class="btn btn-default">Submit</button>
			    	</div>
			  	</div>
			  	<div class="form-group">
			  		<div class="col-sm-offset-2 col-sm-10">
			    		<span class="psw">Already Have an Account? <a href="index.php">Signin</a>&nbsp;</span>&nbsp;<span class="psw">&nbsp;|Forgot <a href="#">password?</a></span>
			    	</div>
			  	</div>
			</form>
			<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
			<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
		</div>
		<nav class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <p style="text-align: center;color: whitesmoke;">Copyright &copy; 2019 CSC</p>
            </div>
        </nav>
	</div>
</body>
</html>
<?php
	unset($_SESSION['error']);
?>