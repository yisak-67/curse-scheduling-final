<?php 
 include_once("header.php");
?>

<html>
<head>
  <style>
.container-fluid{
background-color:red;
list-style-type: none;
text-decoration: none;
text-align: center;
margin: 0;
padding: 0;

}
.nav.navbar-nav li
{
display: inline-block;
font-size: 20px;
padding: 20px;
}
.nav.navbar-nav li a{
text-decoration: none;
color: aqua;
background-color: blue;
font-family: 'Times New Roman', Times, serif;
font-style: normal;

}



  </style>
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"><!--BUPC --> .</a>
    </div>
    <div class="yel">
	
    <ul class="nav navbar-nav">
        <li><a href="home.php"><span></span> Home</a></li>
        <li><a href="addsubject.php"><span></span> Add Subjects</a></li>
        <li><a href="addfaculty.php"><span></span> Add Faculty</a></li> 
        <li><a href="addcourse.php"><span></span> Add Course</a></li>
		<li><a href="addroom.php"><span></span> Room</a></li>
		<li><a href="addtime.php"><span></span> Time</a></li>
        <li><a href="list.php"><span></span> List</a></li>
        <li><a href="tablelist.php"><span></span> Tables</a></li>
    	</ul>
    </div>
  </div>
</nav>

</body>
</html>





