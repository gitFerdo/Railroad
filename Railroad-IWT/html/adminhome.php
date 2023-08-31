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
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link res="stylesheet" href="../css/adminDash.css">


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
        height: 550px
    }

    /* Set gray background color and 100% height */
    .sidenav {
        background-color: #fff;
        height: 100%;
    }

    #dashco {
        background-color: #ADD8E6;
        text-align: center;
        font-weight: bold;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
        .row.content {
            height: auto;
        }
    }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs">
                <h2>Railroad</h2><br><br>
                <img style="width:150px; height:150px ;margin-top:-43px ;" src="../images/logo.jpeg"><br>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#">Dashboard</a></li>
                    <li><a href="./admin/Schedule.php">Schedule </a></li>
                    <li><a href="./admin/package.php">Package</a></li>
                    <li><a href="./admin/feedback.php">Feedbacks</a></li>
                    <li ><a href="./admin/reservation.php">Reservations</a></li>
                    
                    <li><a href="home.html">Railroad Home Page</a></li>
                    <li><a href="login.html">Logout</a></li>
                </ul><br>
            </div>
            <br>

            <div class="col-sm-9">
                <div class="well" id="dashco">
                    <h4>RAILROAD ADMIN DASHBOARD</h4>
                   
                </div>

           

                <div class="col">
                    <div class="row-sm-4">
                        <div class="well">
                            <h4 style="text-align:center;">Train Masters</h4><br>
                            <ul>
                                <li>Udarata Manike : Mr.Nimal Silva </li>
                                <li>Podi Menike : Mr.Kapila Abesingha </li>
                                <li>Yal Devi : Mr.Jagath kulasooriya</li>
                                <li>Udaya Devi :Mr. Malaka Silava  </li>
                                <li>Muthu Kumari :Mr. Mahinda Rajapakse</li>
                                <li>Ruhunu Kumari : Mr. Pannila   </li>
                                <li>Samudra Devi : MR. </li>
                                <li>Uttara Devi </li>
                                <li>Rajarata Rejini </li>
                               

                            </ul>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-4">
                        <div class="well">
                            <h4 style="text-align:center;">Trains</h4><br>
                            <ul>
                                <li>Udarata Manike </li>
                                <li>Podi Menike  </li>
                                <li>Yal Devi </li>
                                <li>Udaya Devi  </li>
                                <li>Muthu Kumari </li>
                                <li>Ruhunu Kumari  </li>
                                <li>Samudra Devi </li>
                                <li>Uttara Devi </li>
                                <li>Rajarata Rejini </li>
                              
                            </ul>
                        </div>
                    </div>
                    <span>
                                    <img src='../images/1133.jpg'>
                                </span>
                </div>

                

            </div>
                </div>

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
