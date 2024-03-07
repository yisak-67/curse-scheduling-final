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
	background-color: blue;
}
tr:nth-child(even) {
  background-color:gray;
}
tr:first-child {
  background-color:orange;
}
.center{
	background-color: black;
}

</style>
</head>
<body background-color ="yellow">
            <div align="center">
            <legend>List of Faculties</legend></fieldset>
			<?php
				include_once("faclist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of Courses</legend></fieldset>
			<?php 
              include_once("corlist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of Subjects</legend></fieldset>
			<?php 
			  include_once("sublist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of rooms</legend></fieldset>
			<?php
				 include_once("roomlist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of class time</legend></fieldset>
			<?php
				 include_once("timelist.php");
			?>
			

<?php
   include_once("footer.php");
   include_once("navbar.php");
?>