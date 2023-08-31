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

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$subject = $_POST["subject"];


$sql="INSERT INTO `contact`(`fname`,`lname`,`subject`
) 
       VALUES ('".$fname."','".$lname."','".$subject."')";
        mysqli_query($conn,$sql);
        
}


header("Location: home.html?insetion=pass");


?>
