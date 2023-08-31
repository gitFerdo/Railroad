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

$trainname = $_POST["trainname"];
$froom = $_POST["froom"];
$too = $_POST["too"];
$starttime = $_POST["starttime"];
$endtime = $_POST["endtime"];
$description = $_POST["description"];



$sql="INSERT INTO `shed`(`trainname`,`froom`,`too`,`starttime`,`endtime`,`description`) 
       VALUES ('".$trainname."','".$froom."','".$too."','".$starttime."','".$endtime."','".$description."')";
        mysqli_query($conn,$sql);
}

header("Location: Schedule.php?insetion=pass");


?>



