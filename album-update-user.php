<?php
	session_start();
	include 'header.login.php';
	include 'connect.php';

	if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
		$userIn =  $_SESSION['username'];
		$userEmail =  $_SESSION['email'];
		echo "
			<div class='container-fluid'>
				<nav class='navbar navbar-default navbar-fixed-top'>
		            <div class='container-fluid'>
		            	<p></p>
		                <h5 style='text-align: center;'>
			                <a href='album-home.php' class='btn btn-success'><span class='glyphicon glyphicon-home'></span></a>
			                <a href='album-profile.php' class='btn btn-success'><span class='glyphicon glyphicon-user'></span></a>
			                <a href='album-pages.php' class='btn btn-success'><span class='glyphicon glyphicon-file'></span></a>
			                <a href='album-registered-user.php' class='btn btn-success'><span class='glyphicon glyphicon-list'></span></a>
			                <form action='signout.php' method='POST'>
						    	<button type='submit' class='btn btn-success'><span class='glyphicon glyphicon-log-out'> </span></button>
							</form>
		                </h5>
		            </div>
		        </nav>
        		<br><br>
        		<div class='container'>
					<h4 style='text-align:center'>Welcome to your album page <i>$userIn</i></h4>
				"
		;
?>

					<form enctype='multipart/form-data' method='POST' class='form-horizontal' action='updatelogin.php'>
						<?php
							if(isset($_SESSION['error'])){
								$error = $_SESSION['error'];
								echo "<center><span style='color:red;'>$error</span></center>";
							}
						?>
						<div class='form-group'>
							<div class='col-sm-10'>
							    <input type='hidden' class='form-control' name='username' value='<?php echo $_REQUEST['unames'];?>'>
							</div>
						</div>
						
						<div class='form-group'>
							<label class='control-label col-sm-2' for='psw'>New Password:<b style="color: red">*</b></label>
							<div class='col-sm-10'>
								<input type='text' class='form-control' name='newpsw' placeholder='Enter new password' value='' required>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2' for='email'>Email:<b style="color: red">*</b></label>
							<div class='col-sm-10'>
						      	<input type='email' class='form-control' name='newemail' value='<?php echo $_REQUEST['emails'];?>'>
						    </div>
						</div>
					  	<div class='form-group'>
					   		<label class='control-label col-sm-2' for='department'>Department:<b style="color: red">*</b></label>
					   		<div class='col-sm-10'>
							 	<select class='form-control' name='department' value='<?php echo $_REQUEST['departments'];?>'>
							    	<option>Computer Science</option>
							  	</select>
					    	</div>
				  		</div>
				  		<div class="form-group">
					      	<label class="control-label col-sm-2" for="gender">Gender</label>
					    	<div class="col-sm-10">
		      					<input type="radio" name="newgender" value="Male" checked>Male
		      					<input type="radio" name="newgender" value="Female">Female
					    	</div>
					  	</div>
					  	<!-- <div class='form-group'>
							<div class='col-sm-10'>
						      	<input type='hidden' class='form-control' name='MAX_FILE_SIZE' value='3000'>
						    </div>
						</div>
					  	<div class='form-group'>
					    	<label class='control-label col-sm-2' for='profilepic'>Album Picture:</label>
					    	<div class='col-sm-10'>
					   			<input type='file' class='form-control' name='profilepic' required>
					   		</div>
				  		</div> -->
				  		<div class='form-group'>
							<label class='control-label col-sm-2' for='profilepic'>New Album Picture:</label>
					    	<div class='col-sm-10'>
							   	<input type='file' class='form-control' name='newupload'>
							</div>
						</div>
					  	<div class='form-group'>
					   		<div class='col-sm-offset-2 col-sm-10'>
				     			<button type='submit' class='btn btn-default' name='submit'>Submit</button>
				    		</div>
				  		</div>
					</form>		
				</div>
			</div>
<?php
	unset($_SESSION['error']);
?>
<?php
	} else {
		echo "<h1>Wrong Username or Password</h1>";
		header("Location: index.html");
	}
?>