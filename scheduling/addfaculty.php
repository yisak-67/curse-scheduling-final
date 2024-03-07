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
	background-image: url(amu6.jfif);
	background-repeat: no-repeat;
	background-size:100%;
	

}
.jumbotron{
    background-color:wheat;
    border-radius: 4%;
	position: relative;
 margin-left:20px;
text-align: center;
    width:600px;
    height:400px;
}
.nu{
width: 100%;
height:100%;
border: 2px solid red;
}
.nuq{
float:right;
height: 100%;
width: 550px;
border: 2px solid red;
text-indent: 10px;
font-size: 25px;
background-color: gray;

}
.b{
text-align: right;
text-shadow: 2px 1px 3px yellow;
font-size: 35px;

}
.bn{
	border: 2px solid red;
	width: 700px;
	text-indent: 25px;
	float: right;
	font-size: 20px;
	color: blue;
	background-color: black
}
</style>
</head>
<body>
<h3 class="b">ABOUT FACUALITY</h3>
	<p class="bn">
		                   
	A faculty is a division within a university or college comprising one subject area or a group of related subject areas, possibly also delimited by level (e.g. undergraduate).[1] In Ethiopia usage such divisions are generally referred to as colleges - constituent college - (e.g., "college of institution and tecnology"), schools (e.g., "school of business"), or academic departments (e.g. department of anthropology”), but may also use a mix terminology (e.g., Arbaminchi University has a "faculty of engineering[2]" ).
 
	</p>
  <div  class="row">
		<div class="jumbotron">
                Here you will Assign faculty
				<form class="form-horizontal" method= "post" action="add.fac.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Add Faculty</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="falname">Faculty Name</label>  
				  <div class="col-md-5">
				  <input id="falname" name="falname" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Designation">Designation</label>  
				  <div class="col-md-5">
				  <input id="Designation" name="Designation" type="text" placeholder="" class="form-control input-md" required="">
				  <span class="help-block"></span>  
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group"  align="right">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-5">
					<button id="submit" name="submit" class="btn btn-primary">Add Faculty</button>
				  </div>
				</div>

				</fieldset>
				</form>
		</div>		
		</div>
			


<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("navbar.php");
   include_once("footer.php");
?>