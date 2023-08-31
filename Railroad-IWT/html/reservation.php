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

$from = $_POST["start"];
$to = $_POST["end"];
$trainClass = $_POST["classs"];
$dateRes = $_POST["date"];
$seatNum = $_POST["seats"];



$sql="INSERT INTO `reserve`(`start`,`end`,`classs`,`date`,`seats`
) 
       VALUES ('".$from."','".$to."','".$trainClass."','".$dateRes ."','".$seatNum."')";
        mysqli_query($conn,$sql);
}

header("Location: home.html?insetion=pass");


?>