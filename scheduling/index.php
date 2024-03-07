<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
?>
<html>
	<head>
		<style>
		
.navbar.navbar-default.navbar-static-top
{
font-size: 20px;
}
.container{
text-decoration: none;
color: blue;
font-size: 45px;
height: 20px;
height: 100px;

}
.navbar.navbar-default.navbar-static-top{
	background-color: black;

list-style-type: none;
text-decoration: none;
text-align: center;
margin:0;
padding: 0;

}

.form{
background-color:white


}
.content{
	width: 40%;
	height: 100%;
}
.form-group{
	color: black;
	font-size: 30px;
}
.b{
	color: blue;
	font-size: 40px;

}
body{
	background-image: url(amu7.jpg);
}
</style>
	
	</head>

<body>

	<nav class="navbar navbar-default navbar-static-top">
	  <div class="container">
	  <h3>COURSE SCHEDULING</h3>
	  </div>
	</nav>
	
	<div class="content">
		<div class="form">
		<form class="form-horizontal" method="post" action="login.php">
			<fieldset>

			<legend><h1 class="b">login Here</h1></legend>

			
			<br><div class="form-group">
			  <label class="col-md-4 control-label" for="username" >Username</label>  
			  <div class="col-md-5">
			  <input id="username" name="username" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">Password</label>
			  <div class="col-md-5">
				<input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			
			<div class="form-group" align="right">
			  <label class="col-md-4 control-label" for="login"></label>
			  <div class="col-md-5">
				<input type="submit" name="lgn" class="btn btn-success " value="Login">
			  </div>
			</div>

			</fieldset>
		</form>
		</div>
	

		<br><font color="black">Don't have an acount?</font> <a href="Register.php"><b>Register here</b> </a>
		</div>
		</div>
</body>
</html>


