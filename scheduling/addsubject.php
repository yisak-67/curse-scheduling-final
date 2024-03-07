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
	background-size:cover;


}
.jumbotron{
    background-color:olive;
    border-radius: 4%;
	position: relative;
 margin-left:20px;
text-align: center;
    width:640px;
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

text-indent: 10px;
font-size: 15px;
background-color:;
color: black;
font-weight: bolder;
}
.b{
text-align:center;
text-shadow: 2px 1px 3px red;
font-size: 40px;

}
</style>
</head>
<body>
	<h1 class="b">Add Subject</h1>

 <p class="nuq">
 
When you add a Subject to a Study, you create a Study Subject record and schedule one or more Events for the Subject. If you create a Rule with an EventAction, when you add a Subject and schedule the first event, all subsequent events will be scheduled automatically. This saves you the effort of manually scheduling all the events for all subjects.

There are different ways to add a Subject to a Study:
<br>
From the Subject Matrix: Use to add one Subject and schedule the first Event.
<br>
the Tasks menu: Use to add more than one Subject or schedule multiple Events.
Scheduling multiple events for subjects is also possible by creating a Rule with an EventAction.
Before you can add a Subject to a Study or Site, the Study or Site must exist and the Study Status must be Available.
<br>
A Subject is added to the current Study or Site, although you can later change the assignment: see Assign or Reassign Subject to Site.

After adding a Subject, you can edit the information in their Subject record, which you access from the Subject Matrix: see View and Edit Details for a Subject.

 </p>
 <br><div class="container"> 
  <div class="row">
    <div class="col-lg-6">
		<div class="jumbotron">
                Here you will Add subjects
				<form class="form-horizontal" method= "POST" action="add.sub.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Add Subjects</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="subcode">Subject Code</label>  
				  <div class="col-md-5">
				  <input id="subcode" name="subcode" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="subdescription">Subject Description</label>  
				  <div class="col-md-5">
				  <input id="subdescription" name="subdescription" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group"  align="right">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-5">
					<input type="submit" id="submit" name="submit" class="btn btn-primary" value="Add Subject"></input>
				  </div>
				</div>

				</fieldset>
				</form>
		</div>		
    </div>


<br><br><br><br><br><br><br>

<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
   include_once("navbar.php");
?>