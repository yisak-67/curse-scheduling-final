<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>
<style>
body {
	background-image: url(amu7.jpg);
	background-size: cover;
	background-size: 100%;
}
.container{
    background-color: aqua;
    border-radius: 18%;
 margin-left: 0%;
    text-align: center;
    width:800px;
    height:600px;
}
.row{
position: relative;
margin-left: 30px;
margin-right: 40px;
margin-top: 40px;
margin-bottom: 15px;
width: 100vw;
}
.jumbotron{
background-color: orange;


}

</style>
</head>
<body>
 
 <br><div class="container"> 
  <div class="row">
    <div class="col-lg-6">
		<div class="jumbotron">
                Here you will Assign Room 
				<form class="form-horizontal" method= "post" action="add.room.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Add Room</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="room">Room</label>  
				  <div class="col-md-5">
				  <input id="room" name="room" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				
				
				<!-- Button -->
				<div class="form-group"  align="right">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-5">
					<button id="submit" name="submit" class="btn btn-primary">Add Room </button>
				  </div>
				</div>

				</fieldset>
				</form>
		</div>		
    </div>




<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
   include_once("navbar.php");
?>