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
$pid = $_POST["pid"];
$description = $_POST["description"];
$price = $_POST["price"];
$validity = $_POST["validity"];



$sql="INSERT INTO `packages`(`pid`,`description`,`price`,`validity`) 
       VALUES ('".$pid."','".$description."','".$price."','".$validity."')";
        mysqli_query($conn,$sql);
}

header("Location: package.php?insetion=pass");


?>



