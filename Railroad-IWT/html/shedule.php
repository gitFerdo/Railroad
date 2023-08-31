





<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Railroad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link res="stylesheet" href="../../AdminDashboard/adminDash.css">
  <link rel="stylesheet" href="../css/HomePage.css">
  <link rel="stylesheet" href="../css/footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
  
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }

    table {
    border-collapse: collapse;
    width: 100%;
    }

    th, td {
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
    background-color:  #3786bd;
    color: white;
    }

    .btndele{
      background-color: red;
      border-radius:8px;
      padding:5px;
      color:white;
      
    }

    .btnedit{
      background-color: yellow;
      border-radius:8px;
      padding:5px;
      color:white;
    }

    .btncreate{
      background-color: green;
      border-radius:8px;
      padding:5px;
      color:white;
    }
    #dashco{
      background-color: #ADD8E6;
      text-align: center;
      font-weight:bold;
    }
  </style>


</head>
<body >


 <!--Navigation Start-->
 <ul class="navbar navbar-light" style="background-color: #e3f2fd;  text-decoration: none;">
    
    <img class="LogoNav" id="LogoNav" src="../images/logo.jpeg">
 


<li class="nav-item">
  <a class="nav-link " href="home.html">HOME</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="contactus.html">Contact Us</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="aboutus.html">About Us</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="reservation.html">RESERVATION </a>
</li>
<li class="nav-item">
    <a class="nav-link active" href="shedule.php">Schedule </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="package.php">Package </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="advertising.html">Advertise </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="feedback.html">Feedback </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="login.html">Login</a>
</li>
</ul>
<br />

<!--Navigation End-->

<div  style="width:100%;" >
<div >
<table>
            <tr>
                <td> <div class="well" id="dashco">
            <h3 class="empal">SHEDULE INFO</h3>
            <!--search-->
            <div>
            <form class="form-inline" method="POST" action=""><input type="text" 
            name="search" class="form-control" placeholder="Search..">
            <button type="submit" name="save" class="btn btn-primary">Search</button></form>
            
        
           

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
if( isset( $_POST['search']))
 {
$search = $_POST["search"]; 
$sql = "SELECT * FROM `shed` WHERE `tid` LIKE '%".$search."%'
 OR `trainname` LIKE '%".$search."%' OR `froom` LIKE '%".$search."%'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
echo "
<table class='table3' border=1>
<tr>
<th>TID</th>
<th>train name</th>
<th>from</th>
<th>to</th>
<th>start time</th>
<th>end time</th>
<th>description</th>

</tr>
";
while($row = mysqli_fetch_assoc($result)) 
{
echo"<br><br>";echo "<tr>
		<td>".$row["tid"]."</td>
		<td>".$row["trainname"]."</td>
		<td>".$row["froom"]."</td>
		<td>".$row["too"]."</td>
		<td>".$row["starttime"]."</td>
        <td>".$row["endtime"]."</td>
        <td>".$row["description"]."</td>
       
		";
}
echo "</table>";
} else {
echo "0 results";
}
}
?>
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

              $result = mysqli_query($conn,"SELECT * FROM shed");
?>
    </div>
            </div>
<div>





<?php
if (mysqli_num_rows($result) > 0) {
?>

                    <table>
                        <tr>
                        <td>ID</td>
                          <td>TRAIN NAME</td>
                        <td>FROM</td>
                        <td>TO</td>
                        <td>START TIME</td>
                        <td>END TIME</td>
                        <td>DESCRIPTION</td>
                     
                        </tr>
                          <?php
                          $i=0;
                          while($row = mysqli_fetch_array($result)) {
                          ?>
                        <tr>
                        <td><?php echo $row["tid"]; ?></td>
                          <td><?php echo $row["trainname"]; ?></td>
                          <td><?php echo $row["froom"]; ?></td>
                          <td><?php echo $row["too"]; ?></td>
                          <td><?php echo $row["starttime"]; ?></td>
                        <td><?php echo $row["endtime"]; ?></td>
                        <td><?php echo $row["description"]; ?></td>
                        
                       
                          </tr>
                          <?php
                          $i++;
                          }
                          ?>
                    </table>
                    <?php
                      }
                      else
                      {
                          echo "No result found";
                      }
                      ?>



    </div>
  </div>
</div>
    <!-- footer Bar -->

  <footer class="footer-distributed">
  
  <div class="footer-left">
  
 
  
  <p class="footer-links">
  <a href="#">Home</a>
  <br>
  <a href="#">Contact Us <br> For Reservations:</a>
    If you have specific questions about the guidelines,<br> please email us: railroad@nih.gov <br><br>
    Other Inquiries:
    For other questions or contact information, <br>please contact +94 112221122
  </p>
  
  <p class="footer-company-name">railroad &copy; 2022</p>
  </div>
  
  <div class="footer-center">
  
  <div>
  <i class="fa fa-map-marker"></i>
  <p><span>119A</span> Colombo, Sri Lanka</p>
  </div>
  
  <div>
  <i class="fa fa-phone"></i>
  <p>+94 112221122</p>
  </div>
  
  <div>
  <i class="fa fa-envelope"></i>
  <p><a href="#">railroad@nih.gov</a></p>
  </div>
  
  </div>
  
  <div class="footer-right">
  
  <p class="footer-company-about">
  <span>Trainline is an independent digital rail and coach platform.Trainline's main offices are in Colombo.We try to provide better service for you </span>
  <img style="width: 300px;height: 300px;" class="LogoNav" id="LogoNav" src="../images/logo.jpeg"><br>
  
  </p>
  
  <div class="footer-icons">
  

  
  </div>

  </div>
  <img src="../images/ga.jpg" style="height: 100px; width:200px"><img src="../images/vis.jpg" style="height: 100px; width:150px"><img src="../images/master.jpg" style="height: 100px; width:150px">
  </footer>
</body>
</html>

