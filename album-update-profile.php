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
        		<br><br>
        		<div class='container'>
					<h4 style='text-align:center'>Welcome to your album page <i>$userIn</i></h4>
				"
		;
?>

					<form enctype='multipart/form-data' method='POST' class='form-horizontal' action='updateinfo.php'>
						<div class='form-group'>
							<div class='col-sm-10'>
							    <input type='hidden' class='form-control' name='username' value='<?php echo $_REQUEST['unames'];?>'>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2' for='firstname'>Firstname:<b style="color: red">*</b></label>
							<div class='col-sm-10'>
								<input type='text' class='form-control' name='newfname' placeholder='Enter firstname' value='<?php echo $_REQUEST['fnames'];?>' required>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2' for='lastname'>Lastname:<b style="color: red">*</b></label>
							<div class='col-sm-10'>
							    <input type='text' class='form-control' name='newlname' placeholder='Enter lastname' value='<?php echo $_REQUEST['lnames'];?>' required>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2' for='matric'>Matric:<b style="color: red">*</b></label>
							<div class='col-sm-10'>
							    <input type='text' class='form-control' name='newmatric' placeholder='Enter matric last four digits' value='<?php echo $_REQUEST['matrics'];?>' required>
							</div>
						</div>
						<div class='form-group'>
							<div class='col-sm-10'>
						      	<input type='hidden' class='form-control' name='email' value='<?php echo $_REQUEST['emails'];?>'>
						    </div>
						</div>
						<div class='form-group'>
						   	<label class='control-label col-sm-2' for='phone'>Phone:<b style="color: red">*</b></label>
						    <div class='col-sm-10'>
						      	<input type='tel' class='form-control' name='newphone' placeholder='Enter phone number' value='<?php echo $_REQUEST['phones'];?>' required>
						    </div>
						</div>
						<div class='form-group'>
						   	<label class='control-label col-sm-2' for='snetwork'>Social network:</label>
						    <div class='col-sm-10'>
						     	<input type='text' class='form-control' name='newsnetwork' placeholder='Enter social netowork' value='<?php echo $_REQUEST['snetworks'];?>'>
						    </div>
						</div>
				  		<div class='form-group'>
				    		<label class='control-label col-sm-2' for='address'>Contact Address:<b style="color: red">*</b></label>
				    		<div class='col-sm-10'>
				     	 		<input type='text' class='form-control' name='newaddress' placeholder='Enter address' value='<?php echo $_REQUEST['addresss'];?>' required>
				    		</div>
					  	</div>
					  	<div class='form-group'>
					   		<label class='control-label col-sm-2' for='state'>State of origin:<b style="color: red">*</b></label>
					   		<div class='col-sm-10'>
							 	<select class='form-control' name='newstate' value='<?php echo $_REQUEST['sogs'];?>'>
							    	<option>Abia</option>
								    <option>Adamawa</option>
								   	<option>Akwa Ibom</option>
								   	<option>Anambra</option>
								   	<option>Bauchi</option>
								   	<option>Bayelsa</option>
							    	<option>Benue</option>
							    	<option>Borno</option>
							    	<option>Cross River</option>
							    	<option>Delta</option>
							    	<option>Ebonyi</option>
							    	<option>Edo</option>
							    	<option>Ekiti</option>
							    	<option>Enugu</option>
								    <option>Gombe</option>
								   	<option>Imo</option>
								   	<option>Jigawa</option>
								    <option>Kaduna</option>
								   	<option>Kano</option>
								   	<option>Katsina</option>
								   	<option>Kebbi</option>
								   	<option>Kogi</option>
							    	<option>kwara</option>
							    	<option>Lagos</option>
							    	<option>Nasarawa</option>
							    	<option>Niger</option>
							    	<option>Ogun</option>
							    	<option>Ondo</option>
							    	<option>Osun</option>
							    	<option>Oyo</option>
							    	<option>Plateau</option>
								    <option>Rivers</option>
								   	<option>Sokoto</option>
								   	<option>Taraba</option>
								   	<option>Yobe</option>
								   	<option>Zamfara</option>
							    	<option>FCT - Abuja</option>
							  	</select>
					    	</div>
				  		</div>
				  		<div class='form-group'>
				    		<label class='control-label col-sm-2' for='skill'>Skill(s):<b style="color: red">*</b></label>
				    		<div class='col-sm-10'>
				      			<input type='text' class='form-control' name='newskill' placeholder='Enter atleast one skill' value='<?php echo $_REQUEST['skills'];?>' required>
				    		</div>
					  	</div>
					  	<div class='form-group'>
					   		<label class='control-label col-sm-2' for='sport'>Sport:</label>
					   		<div class='col-sm-10'>
				      			<input type='text' class='form-control' name='newsport' placeholder='Enter sport' value='<?php echo $_REQUEST['sports'];?>'>
				    		</div>
				  		</div>
				  		<div class='form-group'>
					    	<label class='control-label col-sm-2' for='mstatus'>Marital status:<b style="color: red">*</b></label>
					    	<div class='col-sm-10'>
					   			<select class='form-control' name='newmstatus' value='<?php echo $_REQUEST['mstatuss'];?>'>
				   					<option>Single</option>
				   					<option>Married</option>
				   					<option>Divorce</option>
				   					<option>Undisclose</option>
			  					</select>
				    		</div>
				  		</div>
				  		<div class='form-group'>
					    	<label class='control-label col-sm-2' for='lspoken'>Language(s) spoken:<b style="color: red">*</b></label>
					    	<div class='col-sm-10'>
					   			<input type='text' class='form-control' name='newlspoken' placeholder='Enter language' value='<?php echo $_REQUEST['lspokens'];?>' required>
					   		</div>
				  		</div>
				  		<div class='form-group'>
				    		<label class='control-label col-sm-2' for='fqoute'>Favorite qoute:</label>
				    		<div class='col-sm-10'>
				      			<textarea class='form-control' rows='5' name='newfqoute' value='<?php echo $_REQUEST['fqoutes'];?>'></textarea>
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
					   		<div class='col-sm-offset-2 col-sm-10'>
				     			<button type='submit' class='btn btn-default' name='submit'>Submit</button>
				    		</div>
				  		</div>
					</form>		
				</div>
			</div>

<?php	
	} else {
		echo "<h1>Wrong Username or Password</h1>";
		header("Location: index.html");
	}
?>