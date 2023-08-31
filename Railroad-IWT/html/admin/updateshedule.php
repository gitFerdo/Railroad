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


 if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE shed SET  tid='" . $_POST['tid'] . "',
                                        trainname='" . $_POST['trainname'] . "', 
                                        froom='" . $_POST['froom'] . "', 
                                        too='" . $_POST['too'] . "' ,
                                        starttime='" . $_POST['starttime'] . "',
                                        endtime='" . $_POST['endtime'] . "', 
                                        description='" . $_POST['description'] . "' 
                                           

                                             WHERE tid='" . $_POST['tid'] . "'");
                                             
                        $message = "Record Modified Successfully";
                        header("Location: Schedule.php?insetion=pass");
    }

    $result = mysqli_query($conn,"SELECT * FROM shed WHERE tid='" . $_GET['tid'] . "'");
    $row= mysqli_fetch_array($result);
    ?>


 <html>
    <head>
    <title>Update shedule Data</title>
    <meta charset="utf-8">
	<title>update</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="../css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="../fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="../../css/addshedule.css"/>
    </head>
    <body>

    <div class="page-content">
		<div class="form-v4-content">
    <form  method="POST" action="" class="form-detail" id="myform">
    <div><?php if(isset($message)) { echo $message; } ?>
    </div>
    <div style="padding-bottom:5px;">
    <!--<a href="retrieve.php">Employee List</a>-->
    </div>
    <h2> EDIT FORM</h2>
  
    
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="tid"> ID</label>
						<input type="text" name="tid" id="tid" class="input-text" value="<?php echo $row['tid'];?>">
					</div>
					<div class="form-row form-row-1">
						<label for="trainname">trainname</label>
						<input type="text" name="trainname" id="trainname" class="input-text"value="<?php echo $row['trainname'];?>" >
					</div>
				</div>
				<div class="form-row">
					<label for="froom">from</label>
					<input type="text" name="froom" id="froom" class="input-text" value="<?php echo $row['froom'];?>" >
				</div>

                <div class="form-row">
					<label for="too">to</label>
					<input type="text" name="too" id="too" class="input-text"value="<?php echo $row['too'];?>" >
				</div>

                <div class="form-row">
					<label for="starttime">starttime</label>
					<input type="text" name="starttime" id="starttime" class="input-text" value="<?php echo $row['starttime'];?>" >
				</div>

                <div class="form-row">
					<label for="endtime">endtime</label>
					<input type="text" name="endtime" id="endtime" class="input-text"  value="<?php echo $row['endtime'];?>">
				</div>

                <div class="form-row">
					<label for="description">description </label>
					<input type="text" name="description" id="description" class="input-text" value="<?php echo $row['description'];?>">
				</div>

                
				<div class="form-row-last">
					<input type="submit" name="submit" class="addshedule" value="EDIT">
				</div>
    
    </form>
    </div></div>

    </body>
    </html>

