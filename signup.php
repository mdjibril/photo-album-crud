<?php
	session_start();
	include 'connect.php';
    // picture variables
    $mypic = $_FILES['upload']['name'];
    $temp = $_FILES['upload']['tmp_name'];
    $type = $_FILES['upload']['type'];
    $size = $_FILES['upload']['size'];
    // user and profile variable
	$username = $_POST['username'];
	$password = $_POST['psw'];
	$passhash = md5($password);
	$email = $_POST['email'];
	$department = $_POST['department'];
	$gender = $_POST['gender'];
    // check if user already exist
    $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM user WHERE email = '$email' OR username = '$username'"));
    if($register == 0){
    // check image type
    if(($type == 'image/jpeg') || ($type == 'image/jpg') || ($type == 'image/png')){
        if($size <= 4500000){
            $directory = "./images/$username/";

            if (file_exists($directory.$mypic)) {
                echo "File already exist";
            }else{
            mkdir($directory, 0777, true);            
            move_uploaded_file($temp, "images/$username/$mypic");
            }
            $insert = mysqli_query($con,"INSERT INTO user (username, password, email, department, gender) VALUES ('$username','$passhash','$email','$department','$gender')");
            $insert2 = mysqli_query($con,"INSERT INTO profile (username, email) VALUES ('$username', '$email')");
            if($insert && $insert2){
                $_SESSION['success'] = "Registration Successfull, login with username and password below";
                header("Location: index.php");
            }else{
                $_SESSION['error'] = "Error registering try again";
                header("Location: signup-page.php");
            } 
        }else{
            $_SESSION['error'] = "File too large";
            header("Location: signup-page.php");
        }
    }else{
        $_SESSION['error'] = "Upload error not a valid extension: jpeg, jpg, png only";
        header("Location: signup-page.php");
    }
    }else if($register != 0){
        $_SESSION['error'] = "User already exist, try new username or email";
        header("Location: signup-page.php");
    }
?>