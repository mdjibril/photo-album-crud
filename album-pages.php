<?php  
	session_start();
	// include 'header.album.page.php';
	include 'connect.php';
	include 'header.login.php';
	include 'modal.style.php';

	if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
			
		$userIn =  $_SESSION['username'];
		$userEmail =  $_SESSION['email'];
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
	        		<br><br>
					<h4 style='text-align:center'>All album page</h4>	
			";

		$output1 = "SELECT * FROM profile WHERE (profileId % 2) != 0";
		$result1 = $con->query($output1) or die($con->error);

		$output2 = "SELECT * FROM profile WHERE (profileId % 2) = 0";
		$result2 = $con->query($output2) or die($con->error);

		echo "<div class='row'>";
		while ($row = $result1->fetch_assoc()) {

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

			echo "<div class='col-sm-6' style='border:3px solid green;'>";
			$dir = "images/".$uname."/";
			$open = opendir($dir);
			while (($file = readdir($open)) != false) {
				if ($file != "." && $file != ".." && $file != "Thumbs.db") {

					echo"<img id='$uname' src='$dir/$file' alt='$fname' style='height:100px; width:100px; border-radius: 50%;'>
			            ";
				}
			}

			echo "<h4 style='text-align:center' id='".$uname."'>".$fname." ".$lname."</h4>";
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
			echo "
				<script>
			        // Get the modal
			        var modal = document.getElementById('myModal');

			        // Get the image and insert it inside the modal - use its 'alt' text as a caption
			        var img = document.getElementById('$uname');
			        var modalImg = document.getElementById('img01');
			        var captionText = document.getElementById('caption');
			        img.onclick = function(){
			            modal.style.display = 'block';
			            modalImg.src = this.src;
			            captionText.innerHTML = this.alt;
			        }

			        // Get the <span> element that closes the modal
			        var span = document.getElementsByClassName('close')[0];

			        // When the user clicks on <span> (x), close the modal
			        span.onclick = function() { 
			            modal.style.display = 'none';
			        }
		    	</script>
			";
		}

		while ($row = $result2->fetch_assoc()) {
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

			echo "<div class='col-sm-6' style='border:3px solid green;'>";
			$dir = "images/".$uname."/";
			$open = opendir($dir);
			while (($file = readdir($open)) != false) {
				if ($file != "." && $file != ".." && $file != "Thumbs.db") {

					echo"<img id='$uname' src='$dir/$file' alt='$fname' style='height:100px; width:100px; border-radius: 50%;'>
			            ";
				}
			}

			echo "<h4 style='text-align:center' id='".$uname."'>".$fname." ".$lname."</h4>";
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
			echo "
				<script>
			        // Get the modal
			        var modal = document.getElementById('myModal');

			        // Get the image and insert it inside the modal - use its 'alt' text as a caption
			        var img = document.getElementById('$uname');
			        var modalImg = document.getElementById('img01');
			        var captionText = document.getElementById('caption');
			        img.onclick = function(){
			            modal.style.display = 'block';
			            modalImg.src = this.src;
			            captionText.innerHTML = this.alt;
			        }

			        // Get the <span> element that closes the modal
			        var span = document.getElementsByClassName('close')[0];

			        // When the user clicks on <span> (x), close the modal
			        span.onclick = function() { 
			            modal.style.display = 'none';
			        }
		    	</script>
			";
		}
		echo "</div>";

		
	} else {
		echo "<h1>Wrong Username or Password</h1>";
		header("Location: index.html");
	}
?>