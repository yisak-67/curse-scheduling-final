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
	background-repeat: no-repeat;
	background-size: cover;
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
background-color: aqua;


}

.nuq{
float:right;
height: 100%;
width: 600px;
text-indent: 10px;
font-size: 25px;
background-color: ;

color: yellow;
}
.b{
text-align: center;
text-shadow: 2px 1px 3px white;
color: blue;
font-size: 50px;

}
.n{
	text-indent: 20px;
}

</style>
</head>
<body>
<h1 class="b">ADD COURSE</h1>
<p class ="nuq"><span style="color:deeppink">Courses </span>that do not meet for the entire semester are called off-cycle courses. The deadlines to add these courses are different from those for semester-length courses. You can easily identify off-cycle courses in MyUI by the 'off-cycle' designation and the presence of course dates in MyUI.
</p>
//<br><div class="">
	
  <div class="">
    <div class="col-lg-6">
		<div class="jumbotron">
		<p></p>
		<p class="n">Here you will Assign Courses that are available in university</p>
		<form class="form-horizontal" method= "post" action = "add.cor.php">
			<fieldset>

			<!-- Form Name -->
			<legend class="b">Add Course</legend>

			
			<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="corcode">Course Code</label>  
				  <div class="col-md-5">
				  <input id="corcode" name="corcode" type="text" placeholder="" class="form-control input-md" required="">	
				  </div>
				</div>
				
			
			<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="corname">Course Name</label>  
				  <div class="col-md-5">
				  <input id="corname" name="corname" type="text" placeholder="" class="form-control input-md" required="">
				  </div>
				</div>
				
				<!-- Button -->
			<div class="form-group"  align="right" >
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-5">
				<button id="submit" name="submit" class="btn btn-success">Add Course</button>
			  </div>
			</div>

			</fieldset>
			</form>
		</div>		
    </div>
	<br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
   include_once("navbar.php");
?>