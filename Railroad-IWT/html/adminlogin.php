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




   

    if(isset($_POST['submit'])){
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM adminlog WHERE userName='$userName' and password='$password' ";
        $data = mysqli_query($conn,$sql);
        $result = mysqli_num_rows($data);
        
        if($result){
			 header("location:adminhome.php");
    }
            
        
        else{
            
            header("location:login.html");
          
        }}

?>