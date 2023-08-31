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
    mysqli_query($conn,"UPDATE packages SET  pid='" . $_POST['pid'] . "',
    description='" . $_POST['description'] . "', 
    price='" . $_POST['price'] . "', 
    validity='" . $_POST['validity'] . "' 
                                           

                                             WHERE pid='" . $_POST['pid'] . "'");
                                             
                        $message = "Record Modified Successfully";
                        header("Location: Package.php?insetion=pass");
    }

    $result = mysqli_query($conn,"SELECT * FROM packages WHERE pid='" . $_GET['pid'] . "'");
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
						<label for="pid"> ID</label>
						<input type="text" name="pid" id="pid" class="input-text" value="<?php echo $row['pid'];?>">
					</div>
					<div class="form-row form-row-1">
						<label for="description">description</label>
						<input type="text" name="description" id="description" class="input-text"value="<?php echo $row['description'];?>" >
					</div>
				</div>
				<div class="form-row">
					<label for="price">price</label>
					<input type="text" name="price" id="price" class="input-text" value="<?php echo $row['price'];?>" >
				</div>

                <div class="form-row">
					<label for="validity">validity</label>
					<input type="text" name="validity" id="validity" class="input-text"value="<?php echo $row['validity'];?>" >
				</div>

               

                
				<div class="form-row-last">
					<input type="submit" name="submit" class="addshedule" value="EDIT">
				</div>
    
    </form>
    </div></div>

    </body>
    </html>

