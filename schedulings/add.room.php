<?php 
 
 $con = mysqli_connect ("localhost", "root", "","css");
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, 'css'))
 {
	 echo 'database not selected';
 }

 $Room = $_POST['room'];

 
 $sql = "INSERT INTO rooms (Room) VALUES ('$Room')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not inserted';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("New Room Reserved!");
                         location="home.php";
                           </script>';
 }
 

?>