<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `course`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `faculty`";
$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

?>
<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>
<style>
    
.anim
        {
           
            font-size: 35px;
            text-shadow: 10px 15px 5px rgb(172, 101, 8), 0px 2px 0px rgb(80, 4, 90);
            /* text-align: center; */
            /* background-color:coral; */
            color: white;
            font-weight: bold;
            animation: all;
            animation-duration: 5s;
            animation-play-state:running;  /* pause */
            animation-iteration-count:infinite;  /* infinite  */
            animation-timing-function: linear;
           animation-delay: 0s;
            /* animation: 5s linear 0s infinite running peaceAnimation;  */
        }
        @keyframes all {
            form{
                /* margin-left: 0%; */
                transform: translate(0%);
            }
            to{
                /* margin-right: 0%; */
                transform: translate(100%);
            }
        }

.container{
    background-color: white;
    border-radius: 18%;
 margin-left: 0%;
    text-align: center;
    width:800px;
    height:600px;
}
.Y{
    float:right-top;

text-indent: 10px;
font-size: 25px;

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
background-color:gray;
color: black;

}
body{
    background-image: url("std.jpg");
}
</style>
<link rel="stylesheet" href="style3.css">
</head>
<link rel="stylesheet" href="style3.css">
<body style="background-image: url(amu10.jpg); background-size:cover; background-repeat: no-repeat; ">
<div class="di">

<h3 class="anim">WELCOME TO OUR COURSE SCHEDUILE</h3>
<br><div class="container">
	
  <div class="row">
    <div class="col-lg-6">
		<div class="jumbotron">
		Here you will set your schedules
		<form class="form-horizontal" method= "post" action = "add.home.php">
			<fieldset>

			<!-- Form Name -->
			<legend>Set Schedule</legend>


        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style3.css">

    </head>

    <body style="background-image: url(amu10.jpg); background-size:100%; background-repeat: no-repeat; ">
        
		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="faculty">Faculty</label> 
			<div class="col-md-5">
		<select id="faculty" name="faculty" class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>
		
        <!--Method One-->
        <div class="form-group">
			<label class="col-md-4 control-label" for="Course">Course</label> 
			<div class="col-md-5">
		<select  id="course" name="course"  class="form-control">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option  value="<?php echo $row1[2];?>"><?php echo $row1[2];?></option>

            <?php endwhile;?>

        </select>
        
        

		</div>		
    </div>
    </body>
</html>

<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `rooms`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `subject`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[2]</option>";
}

?>
<html>
<head>
</head>
<body>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="subject">Subject</label> 
			<div class="col-md-5">
		<select  id="subject" name="subject"  class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>
		
        

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[2];?></option>

            <?php endwhile;?>

        </select> 
		<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `rooms`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `rooms`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

 
?>



<html>
<head>
</head>
<body>
<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="room">Room</label> 
			<div class="col-md-5">
		<select  id="room" name="room"  class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>
		
        <!--Method One-->
        
       

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
			

            <?php endwhile;?>

        </select>
        
	
        



<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `timer`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `timer`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

 
?>



<html>
<head>
</head>
<body>
<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
  
		
        <!--Method One-->
        <div class="form-group">
			<label class="col-md-4 control-label" for="start_time">Start time</label> 
			<div class="col-md-5">
		<select  id="start_time" name="start_time" class="form-control">
		  <?php echo $options;?>
       

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
			

            <?php endwhile;?>

        </select>
        
		</div>		
    </div>
    </body>
</head>
</html>
        

<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "insertion";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `timer`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2
$query = "SELECT * FROM `timer`";
$result2 = mysqli_query($connect, $query);


$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[2]</option>";
}

?>





        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
		<!-- Method Two -->
        <div class="form-group">
			<label class="col-md-4 control-label" for="end_time">End time</label> 
			<div class="col-md-5">
		<select  id="end_time" name="end_time" class="form-control">
            <?php echo $options;?>
        </select>
		</div>
		</div>
		
       

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>

            <?php endwhile;?>

        </select>
		<!-- Button -->
				<div class="form-group"  align="right">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-5">
					<button id="submit" name="insert" class="btn btn-primary"> Set </button>
				  </div>
				</div>
        
        
</fieldset>
			</form>
		</div>
        

        <br>
<br>


	
    </div>
</div>

<div class="y">
                  <h3>Course Schedule</h3>
                          <p>The Course Schedule is published before advising and registration begin for each semester and summer session. It lists each class being offered, its time, location, instructor (if available), and its unique number—which students must know in order to register. The course schedule also lets you know when to register and pay tuition. It is updated with the latest changes, and shows if seats are available in each class.</p>
                        
              </div>

    </body>

</head>
</html>

<?php
 $Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo $new; ?>
</font>
<br>
	<a href="home.php" class="btn btn-warning"><i class="icon-arrow-left icon-large"></i>&nbsp;Back to Home</a>
	
</div>
	</div>
	</div>
	</div>





