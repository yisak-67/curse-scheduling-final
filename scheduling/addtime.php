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
	background-image: url(amu13.jpg);
background-size: cover;
}
.container{
    background-color: gray;
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
background-color: green;


}

</style>
</head>
<body>
 
 <br><div class="container"> 
  <div class="row">
    <div class="col-lg-6">
		<div class="jumbotron">
                Here you will Assign your lecture time 
				<form class="form-horizontal" method= "post" action="add.time.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Set Time</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="starttime">Start time</label>  
				  <div class="col-md-5">
				  <input id="starttime" name="starttime" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="endtime">End time</label>  
				  <div class="col-md-5">
				  <input id="endtime" name="endtime" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				
				
				<!-- Button -->
				<div class="form-group"  align="right">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-5">
					<button id="submit" name="submit" class="btn btn-success">Add Time</button>
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