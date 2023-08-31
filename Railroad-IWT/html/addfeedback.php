<?php
   $host = "localhost";
   $user = "root";
   $password = "";
   $db = "railroad";
   //connect to the database
   $conn = mysqli_connect($host,$user,$password,$db);

   if($conn->connect_error)
	{
		die("connection faild:" . $conn->connect_error);
	}



if( isset( $_POST['submit'])) {
$name = $_POST["name"];
$email = $_POST["email"];
$feedback = $_POST["feedback"];




$sql="INSERT INTO `feedback`(`name`,`email`,`feedback`) 
       VALUES ('".$name."','".$email."','".$feedback."')";
        mysqli_query($conn,$sql);
}

header("Location: home.html?insetion=pass");


?>


